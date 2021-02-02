<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\CommodityExchange;
use App\Category;
use App\Item;
use App\User;
use App\Buy;
use App\ItemPrice;

class BuyItemController extends Controller
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
            $buyitem_lists = Buy::get();
            return view('manager.buy_items.index',['buyitem_lists'=>$buyitem_lists]);
        }
        
        else if(Auth::user()->role == 'manager')
        { $id = Auth::id();
      
        $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
        foreach( $commodity_exchanges as  $commodity_exchange)
            {
           $ce=$commodity_exchange->id;
           $buyitem_lists = Buy::where('commodity_exchanges_id',$ce)->get();
              return view('manager.buy_items.index',['buyitem_lists'=>$buyitem_lists]);
            }
         }
         
         else{
            $id = Auth::id();
            $buyitem_lists = Buy::where('customer_id',$id)->get();
            return view('userAccount.buylist',['buyitem_lists'=>$buyitem_lists]);
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
        $users=User::get();
        $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
        foreach( $commodity_exchanges as  $commodity_exchange)
        {
          $ce=$commodity_exchange->id;
          //return $ce;
    
        $items=Item::where('ce_Id',$ce)
               ->get();
         $categories=Category::get();
        return view('manager.buy_items.create',['items'=>$items,'commodity_exchanges'=> $commodity_exchanges,'categories'=> $categories,'users'=>$users]);
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
            'username'=>'required|max:225',
            'itemsname'=>'required|max:225',    
            'description'=>'required|max:900', 
            'price'=>'required',
            'weight'=>'required',
            'total_price'=>'required',
            'commodity_exchanges'=>'required',
            'categories'=>'required',           
            
        ]);
         
         $buyitems = new Buy(); 
         $buyitems->customer_id= $request->username;
         $buyitems->item_id= $request->itemsname;
         $buyitems->description= $request->description;
         $buyitems->price= $request->price;
         $buyitems->weight= $request->weight;
         $buyitems->total_price= $request->total_price;
         $buyitems->commodity_exchanges_id= $request->commodity_exchanges;
         $buyitems->categories_id= $request->categories;
        
           //return $buyitems;
         $buyitems->save();
         return redirect()->action('BuyItemController@index');
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
