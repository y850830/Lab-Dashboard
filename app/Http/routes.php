<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\member;

Route::get('/',function(){
	return view('layout.wellcom');
});

// Route::get('test',function(){
// 	$post = member::all();
// 	$data = null;
// 	$i = 0;
// 	foreach ($post as $key => $pos) {
// 		$data[$i] = $pos;
// 		$i++;
// 	}
// 	$i = 5;
// 	echo $data[5]['name'];
// });

Route::get('member',['as'=>'member','uses'=>'MemberController@index']);

Route::post('member_edit',['as'=>'member_edit','uses'=>'MemberController@update']);

Route::post('member_new',['as'=>'member_new','uses'=>'MemberController@create']);

Route::post('member_del',['as'=>'member_del','uses'=>'MemberController@destroy']);

Route::get('forum',['as'=>'forum','uses'=>'ForumController@index']);

Route::post('forum_edit',['as'=>'forum_edit','uses'=>'ForumController@update']);

Route::get('log',['as'=>'log','uses'=>'LogController@index']);

Route::get('forumedit',function(){
	return view('layout.forumedit');
});

