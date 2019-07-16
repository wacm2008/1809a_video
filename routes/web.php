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
Route::get('/oss1','TestController@oss1');
Route::get('/oss2','TestController@oss2');
Route::get('/oss3','CronController@saveToOss');
Route::get('/videodetail/{vid}','VideoDetailController@videoDetail');
Route::post('/notify','NotifyController@notify');