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




Route::get('/', function () {
    return view('welcome');
});

// Route::match(['get','post'],'notice/add','Admin\NoticeController@add');
//参数1：自定义访问方法  参数2：控制器@方法
//登录
Route::any('index','Login\LoginController@Loign');

//判断登录
// Route::get('index/login','Login\LoginController@index');

Route::any('index/index','Index\IndexController@index');

//退出
Route::any('loginOut','Login\LoginController@loginOut');

// Route::any('index/index','Index\IndexController@index')









