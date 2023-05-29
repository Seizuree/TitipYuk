<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    public function consignee()
    {
        return $this->belongsTo(Consignee::class, 'consignee_id');
    }

    public function marketCategory()
    {
        return $this->belongsTo(MarketCategory::class, 'market_category_id');
    }

    public function consignTransaction()
    {
        return $this->hasOne(ConsignTransaction::class);
    }
}
