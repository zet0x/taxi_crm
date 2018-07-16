<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function main_setting()
    {
    	return view('login.setting.main',[
    		
    		]);
    }
}
