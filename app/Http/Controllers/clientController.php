<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;
use PDF;


class clientController extends Controller
{
     public function login(){
    	return view('client.login');
    }


    public function getlog(Request $req){

    	  $user = DB::table('user')
    	  			->select('*')
                    ->where('Cname', $req->uname)
                    ->where('password', $req->password)
                    ->first();

                   



          if(!empty($user)){

            $req->session()->put('username', $req->uname);
             $req->session()->put('pass', $req->password);


          	return redirect()->route('login.loginId', $user->id);

          }

         
          else{

            $nm = $req->session()->get('username');
            $ps = $req->session()->get('pass');

            if(empty($nm)){

                $req->session()->flash('msg', 'Invalid username');
           }

            if (empty($ps)) {

                $req->session()->flash('msg2', 'Invalid password');
            }

            return redirect('/login');
        }          
    }


    public function loginId($id){

    	 $user = DB::table('user')
    	  			->select('*')
                    ->where('id', $id)              
                    ->first();

         $jsonData = json_encode($user);


                return view('client.clientDetails')->with('client', $jsonData);
    }


    public function rate(Request $req){

    	$rate = $req->rate;

    	$tour = $req->tournm;

    	
    	$rating = DB::statement('UPDATE tours SET rating = '.$rate.'+(rating/5) WHERE tname="'.$tour.'"');

    	return back();

    }




/*************************************PDF Generator**************************************/

    public function get_client_data($id)
    {
    		$cl = $id;

    		 $userData = DB::table('user')
    	  			->select('*')
                    ->where('id', $cl)              
                    ->first();

            return $userData;        
          
    }

    public function pdf($id)
    {
         
         $pdf = \App::make('dompdf.wrapper');
         $pdf->loadHTML($this->convert_client_data_to_html($id));
  
         return $pdf->stream("Client Data.pdf");
    }

    public function convert_client_data_to_html($id)
    {
   
         $client_data = $this->get_client_data($id);

          $output = ' <h1>Client Data</h1><br><hr><br><br><br>

          <div style="color:#8B0000; font-size:18px; font-family:arial">
              
         
   
                   <h3 style="position:relative; top:-40px;left:0px">Name:</h3> <h3 style="position:relative; top:-85px;left:65px">'.$client_data->Cname.'</h3>


                   <h3 style="position:relative; top:-80px;left:0px">Email:</h3> <h3 style="position:relative; top:-125px;left:65px">'.$client_data->Cemail.'</h3>

                   <h3 style="position:relative; top:-120px;left:0px">Requested For:</h3> <h3 style="position:relative; top:-165px;left:145px">'.$client_data->hotel. $client_data->tour.'</h3>

                   <h3 style="position:relative; top:-160px;left:0px">Total Payable:</h3> <h3 style="position:relative; top:-205px;left:135px">'.$client_data->payable.'</h3>

                   </div>

                  ';

    return $output;

    }

}
 /*
          <h1>Client Data</h1><br><hr><br>
    <table width="70%" style="border-collapse: collapse; border: 1px; ">
        <tr style="font-falimy:arial; font-size:20px">
            <td>Client Name</td>
            <td>Email</td>
            <td>Price</td>
            <td>Status</td>
        </tr>';

    $output .=' 
        <tr style="color:blue">
           <td><br>'.$client_data->Cname.'</td>
            <td><br>'.$client_data->Cemail.'</td>
            <td><br>'.$client_data->payable.'</td>
            <td><br>'.$client_data->status.'</td>
          
        </tr>';

    $output .= '</table>*/