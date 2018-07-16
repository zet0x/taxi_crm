<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function main()
    {
    	return view('login.message.main',[
    		
    		]);
    }
}
