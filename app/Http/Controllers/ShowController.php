<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommodityExchange;
use App\Item;
use App\Category;
use App\ItemPrice;
use Carbon\Carbon;
use DB;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $commodityExchange=CommodityExchange::get();
        $itemlist = Item::get();
        $categories = Category::get();
        return view('layouts.shows.index',['commodityExchange'=>$commodityExchange,'itemlist'=>$itemlist,'categories'=>$categories]); 
            
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items=Item::where('ce_Id',$id)
        ->get();     
 
       // $itemPrice=ItemPrice::select(DB::raw('max(date) as date'))
       //->groupBy('item_id')
       // ->get();
       //return $itemPrice;
 
       $itemPrice = DB::table('item_prices AS t1')
       ->select('t1.*')
       ->leftJoin('item_prices AS t2', function( $join ){
           $join->on( 't1.item_id', '=', 't2.item_id' );
           $join->on( 't1.created_at', '<', 't2.created_at' );
       })
       ->whereNull('t2.created_at')
       ->get();
 
 
 
        //$itemPrice=ItemPrice::query()->whereRaw('date=(select max(date)from item_prices)')->get();
        $categories=Category::get();
        $itemlist = Item::get();
       return view('layouts.shows.showitems',['items'=>$items,'itemPrice'=>$itemPrice,'categories'=>$categories,'itemlist'=>$itemlist]);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
