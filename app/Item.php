<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public function categories()
    {
        return $this->belongsTo('App\Category','cat_Id');
    }
    public function commodityExchanges()
    {
        return $this->belongsTo('App\CommodityExchange','ce_Id');
    }
    public function itemPrices()
    {
        return $this->hasMany('App\ItemPrice','item_id');
    }
    public function buys()
    {
        return $this->hasMany('App\Buy','item_id');
    }
}
