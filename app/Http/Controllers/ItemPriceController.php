<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommodityExchange;
use App\Category;
use App\Item;
use App\ItemPrice;
use Illuminate\Support\Facades\Auth;


class ItemPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {            
       
        if(Auth::user()->role == 'admin')
        {
            $itemprices = ItemPrice::get();
            return view('manager.items_prices.index',['itemprices'=>$itemprices]);
        }
        else{
        $id = Auth::id();
        $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
        foreach( $commodity_exchanges as  $commodity_exchange)
        {
          $ce=$commodity_exchange->id;
         

           $itemprices=ItemPrice::where('ce_id',$ce)
           ->get();
  
           return view('manager.items_prices.index',['itemprices'=>$itemprices]);
        }
    }
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $id = Auth::id();
        $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
        foreach( $commodity_exchanges as  $commodity_exchange)
        {
          $ce=$commodity_exchange->id;
          //return $ce;
  
        $items=Item::where('ce_Id',$ce)
               ->get();
        return view('manager.items_prices.create',['items'=>$items,'commodity_exchanges'=> $commodity_exchanges]);
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           
                 
            'items_prices'=>'required|max:900', 
            'itemsname'=>'required|max:225',
           
                    
            ]);
            
            $id = Auth::id();
            $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
            foreach( $commodity_exchanges as  $commodity_exchange)
            {
              $ce=$commodity_exchange->id;
            }

            $itemprices = new ItemPrice(); 
         
            $itemprices->price=$request->items_prices;
            $itemprices->item_id=$request->itemsname;
            $itemprices->ce_id=$ce;

            
            //return $request->date;
            $itemprices->save();
            return redirect()->action('ItemPriceController@index');
         
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itemprices = ItemPrice::find($id);
        $id = Auth::id();
        $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
        foreach( $commodity_exchanges as  $commodity_exchange)
        {
          $ce=$commodity_exchange->id;
          //return $ce;
  
        $items=Item::where('ce_Id',$ce)
               ->get();
        }
        
     
        return view('manager.items_prices.edit',['itemprices'=>ItemPrice::get(),'itemprices'=>$itemprices, 'items'=>$items]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateItemprice=ItemPrice::find($id);
        $updateItemprice->price=$request->items_prices;
        $updateItemprice->item_id=$request->itemsname;

        $updateItemprice->save();
        return redirect()->action('ItemPriceController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
      $item_id = ItemPrice::find($id);
      $item_id->delete();

        return redirect('/itemsprices');
       
    }
}
