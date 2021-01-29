<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPrice extends Model
{
 
    public function items()
    {
        return $this->belongsTo('App\Item','item_id');
    }
    public function commodityExchanges()
    {
        return $this->belongsTo('App\CommodityExchange','ce_id');
    }
}
