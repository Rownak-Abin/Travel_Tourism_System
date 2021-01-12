<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{


  function search(Request $request){
    if($request->has('q')){
      $q = $request->q;
      $result = DB::table('tours')
                ->join('tour_det','tour_det.tid','=','tours.id')
                ->select('*')
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