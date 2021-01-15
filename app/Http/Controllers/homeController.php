<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
	 public function index(){

    	//$resp = Http::get('http://localhost:4000/home/showtour');

    	//$ss = json_decode($resp, true);

	    return view('home.index');
    }


    public function alltours(){

	$tours = DB::table('tours')
				->join('tour_det','tour_det.tid','=','tours.id')
				->select('*')
            	->get();

        return view('home.tours')->with('tours', $tours);

    }

   /* public function micro(){

		    $resp = Http::get('http://localhost:4000/home/showtour');

		    dd($resp->body());

		    $ss = json_encode($resp);


    }*/

    public function details($id){

	$detail = DB::table('tours')
				->join('tour_det','tour_det.tid','=','tours.id')
				->select('*')
				->where('id', $id)
            	->first();

         return view('home.details')->with('details', $detail);        

    }


    public function request(UserRequest $req){

    	 if($req->hasFile('pict')){

        	$file = $req->file('pict');

        	if($file->move('imgs', $file->getClientOriginalName())){

        		DB::table('user')->insert(
    						 array(
					           
					            'Cname'   =>  $req->name,
					            'Cemail'   =>  $req->email,
					            'password'   =>  $req->pass,
					            'tour' => $req->tour,
					            'hotel' => ' ',
					            'status' => 'Pending',
					            'payable' => $req->cos,
					            'picture' =>  $file->getClientOriginalName()
						     )
						);
        	}



        $details = [

				'title' => 'Tour Request at RownakTravel.com',
				'body' => 'Your request for '.$req->tour.' package is being proceed.',
				'name' => $req->name

		];

		\Mail::to($req->email)->send(new \App\Mail\testmail($details));


        	return back();
    }

}


	public function testmail(){



		echo "Seccessfully Done";

	}


}