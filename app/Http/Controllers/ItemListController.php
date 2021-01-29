<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use DB;

class ItemListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('layouts.front.main',['categories'=>$categories]);
       
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
        $items = Item::where('cat_Id',$id)
                 ->get();

        $categories = Category::get();

        $itemPrice = DB::table('item_prices AS t1')
        ->select('t1.*')
        ->leftJoin('item_prices AS t2', function( $join ){
            $join->on( 't1.item_id', '=', 't2.item_id' );
            $join->on( 't1.created_at', '<', 't2.created_at' );
        })
        ->whereNull('t2.created_at')
        ->get();
  
        return view('layouts.shows.items',['items'=>$items,'itemPrice'=>$itemPrice,'categories'=>$categories]);
    }



    public function search(Request $request)
    {
        $categories = Category::get();
        $search=$request->get('search');
        $items= Item:: where('name','LiKE','%'.$search.'%')
                       ->get();

                       $itemPrice = DB::table('item_prices AS t1')
                       ->select('t1.*')
                       ->leftJoin('item_prices AS t2', function( $join ){
                           $join->on( 't1.item_id', '=', 't2.item_id' );
                           $join->on( 't1.created_at', '<', 't2.created_at' );
                       })
                       ->whereNull('t2.created_at')
                       ->get();
                 
         return view('layouts.shows.items',['items'=>$items,'categories'=>$categories,'itemPrice'=>$itemPrice]);

      
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
