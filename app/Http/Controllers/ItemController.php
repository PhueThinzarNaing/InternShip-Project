<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CommodityExchange;
use App\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
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
           $items = Item::get();
           return view('manager.items.index',['items'=>$items]);
        }
        else {
      $id = Auth::id();
      $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
      foreach( $commodity_exchanges as  $commodity_exchange)
      {
        $ce=$commodity_exchange->id;
        //return $ce;

      $items=Item::where('ce_Id',$ce)
             ->get();
      return view('manager.items.index',['items'=>$items,'commodity_exchanges'=> $commodity_exchanges]);
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
        $categories=Category::get();
        return view('manager.items.create',['commodity_exchanges'=>$commodity_exchanges,'categories'=>$categories]);
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
            'item_name'=>'required|max:225',    
            'description'=>'required|max:900', 
            'status'=>'required|max:225',   
            'commodity_exchanges'=>'required|max:225',
            'categories'=>'required|max:225',            
            ]);

            $item = new Item(); 
            if($request->file())
            {
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'),$fileName);
    
            $item->name=$request->item_name;
            $item->description=$request->description;
            $item->photopath=$fileName;
            $item->Status=$request->status;
            $item->ce_Id=$request->commodity_exchanges;
            $item->cat_Id=$request->categories;

            //return $request->description;
            $item->save();
            return redirect()->action('ItemController@index');

            }

            
       
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
        $commodity_exchanges = CommodityExchange::get();
        $category=Category::get();
        $item = Item::find($id);
     
        return view('manager.items.edit',['item'=>Item::get(),'item'=>$item,'category'=>$category,'commodity_exchanges'=>$commodity_exchanges]);
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
        $updateItem=Item::find($id);

        
        $updateItem->name=$request->item_name;
        $updateItem->description=$request->description;
        $updateItem->Status=$request->status;
        $updateItem->ce_Id=$request->commodity_exchanges;
        $updateItem->cat_Id=$request->items;
        
        if($request->file())
        {
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'),$fileName);
            $updateItem->photopath =$fileName;
        }
       
        $updateItem->save();
        return redirect()->action('ItemController@index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::findOrFail($item->id)->delete();

        return redirect('/items');
    }
}
