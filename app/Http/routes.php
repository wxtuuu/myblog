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
Route::group(['middelware'=>'auth'],function(){
    Route::get('admin','Admin\AdminController@index');
    Route::get('admin/user','Admin\AdminController@user');
    /*文章显示*/
    Route::get('admin/article','Admin\ArticleController@index');
    Route::get('admin/article/add','Admin\ArticleController@add');
    Route::get('admin/article/update/{id}','Admin\ArticleController@update');
    /*文章增删改*/
    Route::post('admin/article/add','Admin\ArticleController@store');
    Route::post('admin/article/update/{id}','Admin\ArticleController@edit');
    Route::get('admin/article/delete/{id}','Admin\ArticleController@delete');
    /*标签显示*/
    Route::get('admin/tag','Admin\TagController@index');
    Route::get('admin/tag/add','Admin\TagController@add');
    Route::get('admin/tag/update/{id}','Admin\TagController@update');
    /*标签增删改*/
    Route::post('admin/tag/add','Admin\TagController@store');
    Route::post('admin/tag/update/{id}','Admin\TagController@edit');
    Route::get('admin/tag/delete/{id}','Admin\TagController@delete');
});


