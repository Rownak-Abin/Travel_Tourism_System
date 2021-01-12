<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelSearch extends Controller
{


  function hotsearch(Request $request){
    if($request->has('q')){
      $q = $request->q;
      $result = DB::table('hotel')
                ->where('place', 'like', ''.$q.'%')
                ->get();
      return response()->json(['data'=>$result]);
    }
    else{
      echo "invalid";
    }



  }








    

   /* function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query = '')
      {
       $data = DB::table('employee')
         ->where('ename', 'like', '%'.$query.'%')
        
         ->get();
         
      }
     
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '$row->ename';
       }
      }
      
      $data = array(
       'table_data'  => $output,
       
      );

      echo json_encode($data);
     }
    }*/
}