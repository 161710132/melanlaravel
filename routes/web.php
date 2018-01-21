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

Route::get('/test1','DataController@template');
Route::get('/test2','DataController@template2');
Route::get('/test3','DataController@template3');
Route::get('/test4','DataController@template4');
Route::get('/test5','DataController@template5');
Route::get('/test6','DataController@template6');
Route::get('/test7','DataController@template7');


