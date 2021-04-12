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
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return view('layouts.armed complict.step1');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/view', function () {
    return view('layouts.table');
});