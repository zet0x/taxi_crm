<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Image;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserController extends Controller
{
	private function save_photo($image)
	{
		$extension = $image->getClientOriginalExtension();
		if($extension=='png' or $extension=='jpg' or $extension=='jpeg')
		{
			$rand = rand(11111,99999);
			$rand2 = rand(11111,99999);
			$name_file = md5($rand."".$image->getClientOriginalName()."".$rand2);
			$src = 'public/profile_photo/'.$name_file.'.'.$extension;
			$image->move(public_path() . '/profile_photo/', $name_file.'.'.$extension);
			return $src;
		}
		else
		{
			return null;
		}
	}
	public function admin()
	{
		return view('login.user.admin',[
    		
    		]);
	}
	public function driver_on()
	{
		return view('login.user.driver_on',[
    		
    		]);
	}
	public function driver_off()
	{
		return view('login.user.driver_off',[
    		
    		]);
	}
	public function driver_add()
	{
		return view('login.user.driver_add',[
    		
    		]);
	}
	public function manager()
	{
		return view('login.user.manager',[
    		
    		]);
	}
    public function add(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$input = Input::all();
    		$rules = array(
    			'name' => 'required|string|max:255',
    			'last_name' => 'required|string|max:255',
	            'email' => 'required|string|email|max:255|unique:users',
	            'password' => 'required|string|min:6|confirmed',
	            'photo' => 'file',
	            'premising_crm' => '',
	            'premising_user' => '',
	            'premising_auto' => '',
	            'premising_task' => '',
	            'premising_message' => '',
	            'premising_setting' => '',
    			);
    		$validation = Validator::make($input, $rules);
    		if ($validation->fails())
			{
				$arResult['alert'] = array(
					"code" => 1,
					"title" => "Ошибка",
					"description" => "E-mail уже занят",
					);
			}
			else
			{
				if(!empty($input['premising_crm']))
				{
					if($input['premising_crm'] == 'on')
					{
						$premising_crm = 'true';
					}
					else
					{
						$premising_crm = 'false';
					}
				}
				else
				{
					$premising_crm = 'false';
				}

				if(!empty($input['premising_user']))
				{
					if($input['premising_user'] == 'on')
					{
						$premising_user = 'true';
					}
					else
					{
						$premising_user = 'false';
					}
				}
				else
				{
					$premising_user = 'false';
				}

				if(!empty($input['premising_auto']))
				{
					if($input['premising_auto'] == 'on')
					{
						$premising_auto = 'true';
					}
					else
					{
						$premising_auto = 'false';
					}
				}
				else
				{
					$premising_auto = 'false';
				}

				if(!empty($input['premising_message']))
				{
					if($input['premising_message'] == 'on')
					{
						$premising_message = 'true';
					}
					else
					{
						$premising_message = 'false';
					}
				}
				else
				{
					$premising_message = 'false';
				}

				if(!empty($input['premising_task']))
				{
					if($input['premising_task'] == 'on')
					{
						$premising_task = 'true';
					}
					else
					{
						$premising_task = 'false';
					}
				}
				else
				{
					$premising_task = 'false';
				}

				if(!empty($input['premising_setting']))
				{
					if($input['premising_setting'] == 'on')
					{
						$premising_setting = 'true';
					}
					else
					{
						$premising_setting = 'false';
					}	
				}
				else
				{
					$premising_setting = 'false';
				}

				if(!empty($input['photo']))
				{
					$src = $this->save_photo($input['photo']);
				}
				else
				{
					$src = null;
				}

				
				$user = new User;
				$user->name = $input['name'];
				$user->last_name = $input['last_name'];
				$user->email = $input['email'];
				$user->photo = $src;
				$user->password = Hash::make($input['password']);
				$user->premmising =  json_encode(array(
						"crm" => $premising_crm,
						"auto" => $premising_auto,
						"user" => $premising_user,
						"task" => $premising_task,
						"message" => $premising_message,
						"setting" => $premising_setting
						));
				$user->save();

				$arResult['alert'] = array(
					"code" => 1,
					"title" => "Добавлено",
					"description" => "",
					);
			}
    	}
    	$arResult['on'] = 1;
    	
    	return view('login.user.add',[
    		"arResult" => $arResult,
    		]);
    }
    public function remove()
    {
    	$users = User::get();


    	return view('login.user.remove',[
    		"users" => $users
    		]);	
    }
    public function premising()
    {
		return view('login.user.premising');
    }
}