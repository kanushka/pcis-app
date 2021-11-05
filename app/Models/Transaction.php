<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function paidBy()
    {
        return $this->belongsTo(User::class, 'paid_by');
    }
}
