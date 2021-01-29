<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommodityExchange;
use App\User;
use Illuminate\Support\Facades\Auth;

class Commodity_ExchangesController extends Controller
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
           $commodity_exchanges = CommodityExchange::get();
           return view('admin.commodity_exchanges.index',['commodity_exchanges'=>$commodity_exchanges]);
        }
        else{
            $id = Auth::id();
            $commodity_exchanges = CommodityExchange::where('user_id',$id)->get();
            return view('admin.commodity_exchanges.index',['commodity_exchanges'=>$commodity_exchanges]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $users = User::get();
        return view('admin.commodity_exchanges.create',['users'=>$users]);
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
            'cname'=>'required|max:225',    
            'email'=>'required|max:225',
            'address'=>'required|max:225',                
            'phno1'=>'required|max:225',
            'phno2'=>'required|max:225',
            'user_id' => 'required',
            
            
        ]);
         
         $commodity_exchanges = new CommodityExchange(); 

         if($request->file())
        {
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'),$fileName);

            $commodity_exchanges->name= $request->cname;
            $commodity_exchanges->email= $request->email;
            $commodity_exchanges->address= $request->address;
            $commodity_exchanges->phno1= $request->phno1;
            $commodity_exchanges->phno2= $request->phno2;         
            $commodity_exchanges->photopath= $fileName;
            $commodity_exchanges->user_id= $request->user_id;

            $commodity_exchanges->save();
           return redirect()->action('Commodity_ExchangesController@index');
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
        $users = User::get();
        $commodity_exchanges = CommodityExchange::find($id);
     
        return view('admin.commodity_exchanges.edit',['commodity_exchanges'=>CommodityExchange::get(),'commodity_exchanges'=>$commodity_exchanges,'users'=>$users]);

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
        $updatecommodity_exchanges=CommodityExchange::find($id);

        
        $updatecommodity_exchanges->name=$request->cname;
        $updatecommodity_exchanges->email=$request->email;
        $updatecommodity_exchanges->address=$request->address;
        $updatecommodity_exchanges->phno1=$request->phno1;
        $updatecommodity_exchanges->phno2=$request->phno2;
        $updatecommodity_exchanges->user_id=$request->user_id;
        if($request->file())
        {
            $fileName=time().'_'.$request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads'),$fileName);
            $updatecommodity_exchanges->photopath =$fileName;
        }
       
        $updatecommodity_exchanges->save();
        return redirect()->action('Commodity_ExchangesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommodityExchange $commodity_exchange)
    {
        CommodityExchange::findOrFail($commodity_exchange->id)->delete();

        return redirect('/commodity_exchanges');
    }
}
