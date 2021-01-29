<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class CommodityExchange extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function item()
   {
       return $this->hasMany('App\Item','ce_Id');
   }
   public function itemPrices()
   {
       return $this->hasMany('App\ItemPrice','ce_id');
   }
   public function buys()
   {
       return $this->hasMany('App\Buys','commodity_exchanges_id');
   }
  
   
}
