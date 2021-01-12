<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\hotelRequest;
use Illuminate\Support\Facades\Http;

class hotelController extends Controller
{


    public function allhotels(){

	$data = DB::table('hotel')
            	->get();

        return view('hotel.hotels')->with('hotel', $data);

    }


   public function Hotdetails($id){

	$detail = DB::table('hotel')
				->where('id', $id)
            	->first();

         return view('hotel.hoteldetails')->with('details', $detail);        

    }


     public function hotelReq(hotelRequest $req){

    	 if($req->hasFile('pict')){

        	$file = $req->file('pict');

        	if($file->move('imgs', $file->getClientOriginalName())){

        		DB::table('user')->insert(
    						 array(
					           
					            'Cname'   =>  $req->name,
					            'Cemail'   =>  $req->email,
					            'password'   =>  $req->pass,
					            'tour' => ' ',
					            'hotel' => $req->hotelnm,
					            'status' => 'Pending',
					            'payable' => $req->cos,
					            'picture' =>  $file->getClientOriginalName()
						     )
						);
        	}

        	return back();
    }

}



}