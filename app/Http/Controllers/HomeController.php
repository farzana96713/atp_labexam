<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Validator;
use App\Http\Requests\StudentRequest;

class HomeController extends Controller
{


    public function adminhome(Request $req){
		return view('home.adminhome');
	}
	  public function scouthome(Request $req){
		return view('home.scouthome');
	}
	  public function generalhome(Request $req){
		return view('home.generalhome');
	}
	
		 public function admininfo(Request $req, $id){
		$info = login::where('username',$req->session()->get('admin'))->get();
		return view('home.info', ['inf'=>$info[0]]);
	}
	public function admininf(Request $req, $id){
    $info=login::find($req->id);
	
	
    	$info->username = $req->uname;
    	$info->password= $req->pass;
    	$info->address= $req->phone;
		$info->phone= $req->phone;
		$info->email= $req->email;
    	
    	$info->save();

		return redirect()->route('home.adminhome');
	
    }
	 public function scoutinfo(Request $req, $id){
		$info = login::where('username',$req->session()->get('scout'))->get();
		return view('home.info', ['inf'=>$info[0]]);
	}
	public function scoutinf(Request $req, $id){
		
		  $info=login::find($req->id);
	
	
    	$info->username = $req->uname;
    	$info->password= $req->pass;
    	$info->address= $req->phone;
		$info->phone= $req->phone;
		$info->email= $req->email;
    	
    	$info->save();

		return redirect()->route('home.scouthome');
		

	
    }
	
	 public function generalinfo(Request $req, $id){
		$info = login::where('username',$req->session()->get('general'))->get();
		return view('home.info', ['inf'=>$info[0]]);
	}
	public function generalinf(Request $req, $id){

	  $info=login::find($req->id);
	
	
    	$info->username = $req->uname;
    	$info->password= $req->pass;
    	$info->address= $req->phone;
		$info->phone= $req->phone;
		$info->email= $req->email;
    	
    	$info->save();

		return redirect()->route('home.generalhome');
    }
	 public function scoutlist(Request $req){
		$scout = login::all()->where('type',"scout");
    	return view('home.scoutlist', ['sc'=> $scout]);
	}
	
	  public function addscout(){

    	return view('home.addscout');
    }
	 public function addsc(Request $req){

    	$scout = new login();
    	$scout->username = $req->uname;
    	$scout->password = $req->pass;
    	$scout->address = $req->address;
    	$scout->phone = $req->phone;
    	$scout->email = $req->email;
		$scout->type = "scout";
		
    	
    	$scout->save();

    	$data = login::where('username', $req->uname)->where('password', $req->pass)->where('address', $req->address)->where('phone', $req->phone)->where('email', $req->email)->where('type', "scout")->get();
    	return redirect()->route('home.scoutlist');
    }
	  public function deletescout($scid){
   
		login::destroy($scid);
		return redirect()->route('home.scoutlist');
	}
	

  

	
}




