<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['namespace'=>'Login','middleware'=>['auth','premising']],function(){
	Route::get('/','IndexController@index')->name('page.main');
	Route::get('/profile', 'IndexController@profile')->name('page.profile');
	Route::get('/balance', 'IndexController@balance')->name('page.balance');
	//USER
	Route::any('/user/list/admins','UserController@admin')->middleware('user')->name('page.user.admin');


	Route::any('/user/list/driver/on','UserController@driver_on')->middleware('user')->name('page.user.driver.on');
	Route::any('/user/list/driver/off','UserController@driver_off')->middleware('user')->name('page.user.driver.off');
	Route::any('/user/list/driver/add','UserController@driver_add')->middleware('user')->name('page.user.driver.add');


	Route::any('/user/list/manger','UserController@manager')->middleware('user')->name('page.user.manager');
	Route::any('/user/add','UserController@add')->middleware('user')->name('page.user.add');
	Route::get('/user/list','UserController@remove')->middleware('user')->name('page.user.remove');
	Route::get('/user/premising','UserController@premising')->middleware('user')->name('page.user.premising');
	//SETTING
	Route::get('/setting/main','SettingController@main_setting')->middleware('setting')->name('page.setting.main');
	//AUTO
	Route::any('/auto/main','AutoController@main')->middleware('auto')->name('page.auto.main');
	Route::get('/auto/all','AutoController@all')->middleware('auto')->name('page.auto.all');
	//CRM
	Route::get('/crm/yandex','CrmController@yandex')->middleware('crm')->name('page.crm.yandex');
	Route::get('/crm/vezet','CrmController@vezet')->middleware('crm')->name('page.crm.vezet');
	Route::get('/crm/gibdd','CrmController@gibdd')->middleware('crm')->name('page.crm.gibdd');
	Route::get('/crm/wage-driver','CrmController@wage_driver')->middleware('crm')->name('page.crm.wage_driver');
	Route::get('/crm/wage-admin','CrmController@wage_admin')->middleware('crm')->name('page.crm.wage_admin');
	//TASK
	Route::get('/task','TaskController@main')->middleware('task')->name('page.task.main');
	//MESSAGE
	Route::get('/message','MessageController@main')->middleware('message')->name('page.message.main');
});

Auth::routes();



/* Localization */

Route::get('/ru', function(){
   Session::put('local', 'ru');
   return Redirect::back();
})->name('localization.ru');

Route::get('/en', function(){
    Session::put('local', 'en');
    return Redirect::back();
})->name('localization.en');
