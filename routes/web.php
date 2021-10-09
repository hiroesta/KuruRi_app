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

use App\Http\Controllers\GroupController;

Route::get('/', 'HomeController@home')->name('home1');
//情報を表示するページ

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about','HomeController@about')->name('about');

Route::get('members/{id}','UserController@show')->name('profile');
//ユーザープロフィールを表示

Route::get('members/{id}/list','GroupController@memberList')->name('memberList');

Route::get('members/{id}/edit','UserController@edit')->name('edit');
//ユーザープロフィールの編集画面

Route::post('members/{id}/edit','UserController@update')->name('user_update');


Route::get('group/create','GroupController@create')->name('create');
//グループの作成画面

Route::post('group','GroupController@store')->name('group_create');
//グループ作成画面のデータ作成

Route::get('group/{id}/show','GroupController@show')->name('group_profile');
//グループプロフィールを表示

Route::get('groups/{id}/edit','GroupController@edit')->name('group_edit');

Route::post('groups/{id}/update','GroupController@update')->name('group_update');

Route::get('groups/{id}/entry','GroupController@entry')->name('group_entry');

Route::get('groups/{id}/info','GroupController@info')->name('group_info');

Route::get('groups/{id}/info/create','GroupController@infoCreate')->name('group_info_create');

Route::post('group/{id}/info/send','GroupController@infoSend')->name('group_info_send');

Route::get('group/info/{id}/edit','GroupController@infoEdit')->name('group_info_edit');

Route::delete('group/{id}/info/delete','GroupController@infoDestroy')->name('group_info_delete');

Route::delete('group/{id}/member/delete','GroupController@memberDestroy')->name('group_member_delete');

