<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function checkoutProducts()
    {
        return $this->hasMany(CheckoutProduct::class, 'checkout_id', 'id');
    }
}
