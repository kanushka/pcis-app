<?php

namespace App\Http\Resources;

use App\Http\Resources\OrderItemResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\TransactionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'note' => $this->note,
            'orderItems' => OrderItemResource::collection($this->whenLoaded('orderItems')),
            'approvedAt' => $this->approved_at,
            'approvedBy' => new UserResource($this->whenLoaded('approvedBy')),
            'transactions' => TransactionResource::collection($this->whenLoaded('transactions')),
            'orderedBy' => new UserResource($this->whenLoaded('orderedBy')),
            'createdAt' => $this->created_at,
        ];
    }
}
