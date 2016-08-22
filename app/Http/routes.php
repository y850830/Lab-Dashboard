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

Route::get('/',['as'=>'/','uses'=>'LoginfoController@index']);

Route::get('member',['as'=>'member','uses'=>'MemberController@index']);

Route::post('member_edit',['as'=>'member_edit','uses'=>'MemberController@update']);

Route::post('member_new',['as'=>'member_new','uses'=>'MemberController@create']);

Route::get('member_del/{id}',['as'=>'member_del','uses'=>'MemberController@destroy']);

Route::get('forum',['as'=>'forum','uses'=>'ForumController@index']);

Route::post('forum_edit',['as'=>'forum_edit','uses'=>'ForumController@update']);

Route::get('loginfo',['as'=>'loginfo','uses'=>'LoginfoController@loginfo']);

Route::get('log_out',['as'=>'log_out','uses'=>'LoginfoController@update']);

Route::get('log_in',['as'=>'log_in','uses'=>'LoginfoController@login']);


