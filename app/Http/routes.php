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

// Route::get('member',function(){
// 	return view('layout.member');
// });

// Route::get('forum',function(){
// 	return view('layout.forum');
// });

// Route::get('log',function(){
// 	return view('layout.log');
// });

Route::get('member',['as'=>'member','uses'=>'MemberController@index']);

Route::get('forum',['as'=>'forum','uses'=>'ForumController@index']);

Route::get('log',['as'=>'log','uses'=>'LogController@index']);

Route::post('member_edit',['as'=>'member_edit','uses'=>'MemberController@update']);

Route::get('newmember',function(){
	return view('layout.newmember');
});

Route::get('forumedit',function(){
	return view('layout.forumedit');
});

