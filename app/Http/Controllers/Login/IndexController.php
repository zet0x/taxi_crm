<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class IndexController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index',[
    		
    		]);
    }
    public function profile()
    {
    	return view('login.profile',[
    		
    		]);
    }
    public function balance()
    {
    	return view('login.balance',[
    		
    		]);
    }
}
