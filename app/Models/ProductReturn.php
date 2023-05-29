<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturn extends Model
{
    use HasFactory;

    public function productReturnDetail()
    {
        return $this->hasOne(ProductReturnDetail::class);
    }

    public function consignee()
    {
        return $this->belongsTo(Consignee::class, 'consignee_id');
    }

    public function consignor()
    {
        return $this->belongsTo(Consignor::class, 'consignor_id');
    }
}
