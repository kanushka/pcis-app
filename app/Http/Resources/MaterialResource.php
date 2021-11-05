<?php

namespace App\Http\Resources;

use App\Http\Resources\SupplierResource;
use Illuminate\Http\Resources\Json\JsonResource;

class MaterialResource extends JsonResource
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
            'name' => $this->name,
            'suppliers' => SupplierResource::collection($this->whenLoaded('suppliers')),
        ];
    }
}
