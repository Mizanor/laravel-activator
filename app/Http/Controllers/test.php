<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class test extends Controller
{
    public function View()
    {
    	return view('keygenerate');
    }

   public function keygenerate(Request $request){
 	$id = $request->cid;
 	$valid = $request->mounth;
  	$license =  rand(00000000,99999999);
  // // dd($license);
  	$dt = Carbon::now()->addDay($valid)->format('Y-m-d');


    $data = User::find($id);
    $data->license_key = $license;
    $data->expire_date = $dt;
    $data->save();
    // $alldata = User::all(); 
    return view('activeLicense', compact('data'));
   	 
   	
   	
   	
   }
      public function activated(Request $request){
      	$id = $request->custId;
      	$license = $request->license;
      	$data = User::find($id);
      	$dblicense= $data->license_key;
      	
		if ($license == $dblicense) {
		  echo "License Activate";
		} else {
		  echo "Invalide License Key";
		}
 	
   	 
   	
   	
   	
   }
}
