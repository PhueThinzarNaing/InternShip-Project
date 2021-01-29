<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\ItemPrice;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$itemlist = Item::get();
        //return view('layouts.front.home',['itemlist'=>$itemlist]);
        $categories = Category::get();
        $itemss = ItemPrice::get();
        return view('layouts.front.home',['categories'=>$categories,'itemss'=>$itemss]);
    }
}
