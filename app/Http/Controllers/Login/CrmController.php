<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrmController extends Controller
{
    public function yandex()
    {
    	return view('login.crm.yandex',[
    		
    		]);
    }
    public function vezet()
    {
    	return view('login.crm.vezet',[
    		
    		]);
    }
    public function wage_driver()
    {
    	return view('login.crm.wage_driver',[
    		
    		]);
    }
    public function wage_admin()
    {
    	return view('login.crm.wage_admin',[
    		
    		]);
    }
    public function gibdd()
    {
    	return view('login.crm.gibdd',[
    		
    		]);
    }
}
