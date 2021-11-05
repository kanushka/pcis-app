<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['supplier_id', 'material_id', 'quantity', 'note'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
// sail artisan make:resource OrderItemResource
// sail artisan make:resource OrderItemCollection
// sail artisan make:resource OrderResource
// sail artisan make:resource OrderCollection
// sail artisan make:resource DeliveryResource
// sail artisan make:resource DeliveryCollection
