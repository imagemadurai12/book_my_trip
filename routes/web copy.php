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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::GET('/','App\Http\Controllers\PagesController@home');

Route::GET('/blogs','App\Http\Controllers\PagesController@blogsCreate');

Route::GET('/blogs/create','App\Http\Controllers\PagesController@index');

Route::POST('/blogs/store','App\Http\Controllers\PagesController@store');

Route::GET('/blogs/{blog}/show','App\Http\Controllers\PagesController@show');

Route::GET('/blogs/{blog}/edit','App\Http\Controllers\PagesController@edit');

Route::PATCH('/blogs/{blog}','App\Http\Controllers\PagesController@update');

Route::DELETE('/blogs/{blog}','App\Http\Controllers\PagesController@delete');

