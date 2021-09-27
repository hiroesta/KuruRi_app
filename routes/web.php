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

Route::get('/', 'HomeController@home');
//情報を表示するページ

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('members/{id}','UserController@show')->name('profile');
//ユーザープロフィールを表示

Route::get('members/{id}/edit','UserController@edit')->name('edit');
//ユーザープロフィールの編集画面

Route::post('members/{id}/edit','UserController@update');


Route::get('group/create','GroupController@create');
//グループの作成画面

Route::post('group','GroupController@store');
//グループ作成画面のデータ作成