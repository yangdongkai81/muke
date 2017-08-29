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
    return view('welcome');
});

Route::get('/admin_index','Admin_courseController@index');
Route::get('/admin_cate','Admin_courseController@cate');
Route::post('/cate_add','Admin_courseController@cate_add');
Route::post('/some','Admin_courseController@some');
Route::get('/admin_mold','Admin_courseController@mold');
Route::post('/mold_add','Admin_courseController@mold_add');
