<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::with('orderedBy')->paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'note' => 'nullable|string|max:255',
            'orderItems' => 'required|array',
            'orderItems.*.supplierId' => 'required|exists:suppliers,id',
            'orderItems.*.materialId' => 'required|exists:materials,id',
            'orderItems.*.quantity' => 'required|integer',
            'orderItems.*.note' => 'nullable|string|max:255',
        ]);

        $order = new Order;
        $order->note = $request->note;
        $order->ordered_by = $request->user()->id;
        $order->save();

        foreach ($request->orderItems as $key => $orderItem) {
            $orderItem = new OrderItem([
                'supplier_id' => $orderItem["supplierId"],
                'material_id' => $orderItem["materialId"],
                'quantity' => $orderItem["quantity"],
                'note' => $orderItem["note"],
            ]);
            $order->orderItems()->save($orderItem);
        }

        return new OrderResource($order);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return new OrderResource(Order::with([
            'orderItems.supplier', 
            'orderItems.material', 
            'orderItems.transactions', 
            'orderItems.deliveries', 
            'approvedBy', 
            'orderedBy'
            ])->where('id', $order->id)->firstOrFail());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'note' => 'nullable|string|max:255',
            'orderItems' => 'required|array',
            'orderItems.*.supplierId' => 'required|exists:suppliers,id',
            'orderItems.*.materialId' => 'required|exists:materials,id',
            'orderItems.*.quantity' => 'required|integer',
            'orderItems.*.note' => 'nullable|string|max:255',
        ]);

        $order->note = $request->note;
        $order->ordered_by = $request->user()->id;
        $order->save();

        $order->orderItems()->delete();

        foreach ($request->orderItems as $key => $orderItem) {
            $orderItem = new OrderItem([
                'supplier_id' => $orderItem["supplierId"],
                'material_id' => $orderItem["materialId"],
                'quantity' => $orderItem["quantity"],
                'note' => array_key_exists("note", $orderItem) ? $orderItem["note"] : "",
            ]);
            $order->orderItems()->save($orderItem);
        }

        return new OrderResource($order);
    }

    /**
     * Approve the order
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, Order $order)
    {
        $validated = $request->validate([
            'note' => 'nullable|string|max:255',
            'accountId' => 'required|exists:accounts,id',
        ]);

        $order->note = $request->note;
        $order->approved_at = now();
        $order->approved_by = $request->user()->id;
        $order->save();

        foreach ($order->orderItems as $key => $orderItem) {            
            $transaction = new Transaction;
            $transaction->order_item_id = $orderItem->id;
            $transaction->supplier_id = $orderItem->supplier->id;
            $transaction->account_id = $request->accountId;
            $transaction->amount = $orderItem->material->unit_price * $orderItem->quantity;
            $transaction->type = 'debit';
            $transaction->note = $request->note;
            $transaction->paid_by = $request->user()->id;
            $transaction->save();

            $orderItem->paid = true;
            $orderItem->save();
        }

        return new OrderResource($order);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
    }
}
