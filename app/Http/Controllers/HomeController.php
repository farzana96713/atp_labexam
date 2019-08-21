<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
	

  

	
}




