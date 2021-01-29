<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function commodityExchanges()
    {
        return $this->belongsTo('App\CommodityExchange','commodity_exchangesId');
    }
    public function item()
    {
        return $this->hasMany('App\Item','ce_Id');
    }
    public function buys()
    {
        return $this->hasMany('App\Buys','categories_id');
    }
}
