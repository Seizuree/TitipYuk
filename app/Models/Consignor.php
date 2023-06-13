<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignor extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function productReturn()
    {
        return $this->hasMany(ProductReturn::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
