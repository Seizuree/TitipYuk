<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function consignor()
    {
        return $this->belongsTo(Consignor::class, 'consignor_id');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function consignTransaction()
    {
        return $this->hasOne(ConsignTransaction::class);
    }
}
