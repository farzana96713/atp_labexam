<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Login;


use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		
		
		$result = DB::table('users')->where('username', $req->uname)
				->where('password', $req->password)
				->get();
	    
				
	    if(count($result) > 0 && $result[0]->type=="admin"){

			$req->session()->put('admin', $req->uname);
			return redirect()->route('home.adminhome');
		}
		 else if(count($result) > 0 && $result[0]->type=="scout"){

			$req->session()->put('scout', $req->uname);
			return redirect()->route('home.scouthome');
		}
		elseif(count($result) > 0 && $result[0]->type=="generalusers")
		{
				$req->session()->put('general', $req->uname);
			return redirect()->route('home.generalhome');
			
		}
		
		else{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			
		}
	}
	
public function signup(Request $req){
        return view('login.signup');
    
    }
	
	public function sign(Request $req){
     $sign = new Login();
    	$sign->username = $req->uname;
		$sign->password = $req->pass;
    	$sign->address = $req->address;
    	$sign->phone = $req->contact;
		$sign->email = $req->email;
		$sign->type = $req->type;
		
		
    	
    	$sign->save();

    	$data = Login::where('username', $req->uname)->where('password', $req->pass)->where('address', $req->address)->where('phone', $req->contact)->where('email', $req->email)->where('type', $req->type)->get();
		
    	return redirect()->route('login.index');
    
    }
}
