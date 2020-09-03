<?php

use Illuminate\Support\Facades\Route;

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


Route::match(['get', 'post'], '/admin','AdminController@login');
Route::get('/', function () {
    return view('layouts/welcome');
});
Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/logout', 'AdminController@logout');

Route::get('/admin/setting', 'AdminController@setting');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/check-pwd', 'AdminController@check_pwd');
    Route::match(['get', 'post'], '/admin/update-pwd','AdminController@updatePwd');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('/home');
