<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsignTransaction extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function paymentDetail()
    {
        return $this->hasOne(PaymentDetail::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class, 'market_id');
    }

    public function productReturnDetail()
    {
        return $this->hasOne(ProductReturnDetail::class);
    }
}
