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
Route::auth();/*
Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', 'Home\HomeController@index');*/

Route::group(['namespace'=>'Admin'/*,'middleware'=>'auth:admin'*/],function(){

    Route::get('admin', 'AdminController@index');
    /*用户登录*/
    Route::get('admin/login', 'AuthController@getLogin');
    Route::post('admin/login', 'AuthController@postLogin');
    Route::get('admin/register', 'AuthController@getRegister');
    Route::post('admin/register', 'AuthController@postRegister');
    Route::get('admin/logout', 'AuthController@logout');
    /*文章显示*/
    Route::get('admin/article','ArticleController@index');
    Route::get('admin/article/add','ArticleController@add');
    Route::get('admin/article/update/{id}','ArticleController@update');
    /*文章增删改*/
    Route::post('admin/article/add','ArticleController@store');
    Route::post('admin/article/update/{id}','ArticleController@edit');
    Route::get('admin/article/delete/{id}','ArticleController@delete');
    /*标签显示*/
    Route::get('admin/tag','TagController@index');
    Route::get('admin/tag/add','TagController@add');
    Route::get('admin/tag/update/{id}','TagController@update');
    /*标签增删改*/
    Route::post('admin/tag/add','TagController@store');
    Route::post('admin/tag/update/{id}','TagController@edit');
    Route::get('admin/tag/delete/{id}','TagController@delete');
});

