<?php

namespace App\Models;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customerName', 'orderId', 'productName','quantity', 'totalPrice'];


    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }


}

