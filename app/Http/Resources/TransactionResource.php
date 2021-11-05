<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SupplierResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\AccountResource;
use App\Http\Resources\UserResource;

class TransactionResource extends JsonResource
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
            'order' => new OrderResource($this->whenLoaded('order')),
            'supplier' => new SupplierResource($this->whenLoaded('supplier')),
            'account' => new AccountResource($this->whenLoaded('account')),
            'currency' => $this->currency,
            'amount' => $this->amount,
            'type' => $this->type,
            'note' => $this->note,
            'paidBy' => new UserResource($this->whenLoaded('paidBy')),
            'paidAt' => $this->created_at,
        ];
    }
}
