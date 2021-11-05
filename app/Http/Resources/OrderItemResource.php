<?php

namespace App\Http\Resources;

use App\Http\Resources\DeliveryResource;
use App\Http\Resources\MaterialResource;
use App\Http\Resources\SupplierResource;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderItemResource extends JsonResource
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
            'supplier' => new SupplierResource($this->whenLoaded('supplier')),
            'material' => new MaterialResource($this->whenLoaded('material')),
            'quantity' => $this->quantity,
            'delivered' => $this->delivered,
            'deliveries' => DeliveryResource::collection($this->whenLoaded('deliveries')),
            'note' => $this->note,
        ];
    }
}
