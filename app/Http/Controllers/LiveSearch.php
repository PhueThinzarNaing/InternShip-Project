<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('layouts.shows.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('items')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('description', 'like', '%'.$query.'%')
         ->orWhere('photopath', 'like', '%'.$query.'%')
         ->orWhere('Status', 'like', '%'.$query.'%')
         ->orWhere('ce_Id', 'like', '%'.$query.'%')
         ->orWhere('cat_Id', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('items')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
       
         '.$row->name.'
         '.$row->description.'
        
        '.$row->photopath.'
         '.$row->Status.'
         '.$row->ce_Id.'
         '.$row->cat_Id.'
      
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}

