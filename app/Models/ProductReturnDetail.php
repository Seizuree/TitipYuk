<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturnDetail extends Model
{
    use HasFactory;

    public function consignTransaction()
    {
        return $this->belongsTo(ConsignTransaction::class);
    }

    public function productReturn()
    {
        return $this->belongsTo(productReturn::class);
    }
}
