<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function main()
    {
    	return view('login.task.main',[
    		
    		]);
    }
}
