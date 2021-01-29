<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    public function users()
    {
       
        return $this->belongsTo('App\User','customer_id');
    }

    public function items()
    {
       
        return $this->belongsTo('App\Item','item_id');
    }
    public function commodityExchanges()
    {
       
        return $this->belongsTo('App\CommodityExchange','commodity_exchanges_id');
    }
    public function categories()
    {
       
        return $this->belongsTo('App\Category','categories_id');
    }
    



}
