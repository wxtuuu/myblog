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

Route::get('/', function () {
    return redirect('home');
});
Route::get('home','Home\HomeController@index');
Route::get('test',function (){
    return "test";
});
Route::group(['middelware'=>'auth'],function(){
    Route::get('admin','Admin\AdminController@index');
    Route::get('admin/user','Admin\AdminController@user');
    Route::get('admin/article','Admin\ArticleController@index');
    Route::get('admin/article/add','Admin\ArticleController@add');
    Route::get('admin/article/update','Admin\ArticleController@update');
    Route::get('admin/article/delete','Admin\ArticleController@delete');
});


