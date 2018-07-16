<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Auto;
use App\Model_auto;
use App\Color_auto;
use App\Year_auto;
use App\Crm_auto;
use App\Photo_auto;

class AutoController extends Controller
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
    public function main(Request $request)
    {
        if(!empty($request->mark_id) and $request->ajax == 1)
        {
            $data = Model_auto::where('mark_id',$request->mark_id)->get();
            $data = json_encode($data);
            return $data;
        }

        if($request->isMethod('post') and $request->ajax == 0)
        {
            $input = Input::all();
            $rules = array(
            'mark_id' => 'required|integer',
            'model_id' => 'required|integer',
            'number' => 'required|string|max:255',
            'year' => 'required|integer',
            'color' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'comment' => 'string',
            'brand' => '',
            'photo' => "image"
            );
            $validation = Validator::make($input, $rules);
            if ($validation->fails())
            {
                //dd($validation->messages());
                $arResult['alert'] = array(
                    "code" => 1,
                    "title" => "Ошибка",
                    "description" => "Что то пошло не так",
                    );
            }
            else
            {
                
                $crm_auto = Crm_auto::create($input);
                if(!empty($input['photo']))
                {
                    $src = $this->save_photo($input['photo']);
                    $photo = new Photo_auto;
                    $photo->crm_auto_id = $crm_auto->id;
                    $photo->src = $src;
                    $photo->save();
                }

                $arResult['alert'] = array(
                    "code" => 1,
                    "title" => "Авто добавлено",
                    "description" => "",
                    );
            }
        }

        $arResult['mark'] = Auto::get();
        $arResult['year'] = Year_auto::get();
        $arResult['color'] = Color_auto::get();
        return view('login.auto.main',[
    		"arResult" => $arResult,
    		]);
    }
    public function all()
    {
        $arResult['auto'] = DB::table('crm_autos')
                            ->leftJoin('autos','crm_autos.mark_id','=','autos.id')
                            ->leftJoin('model_autos','crm_autos.model_id','=','model_autos.id')
                            ->leftJoin('photo_autos','crm_autos.id','=','photo_autos.crm_auto_id')
                            ->get();
    	return view('login.auto.all',[
    		'arResult' => $arResult
    		]);
    }
}
