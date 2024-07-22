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


Route::GET('/','App\Http\Controllers\Pagescontroller@home');

Route::GET('/blogs','App\Http\Controllers\Pagescontroller@create');

Route::GET('/blogs/create','App\Http\Controllers\Pagescontroller@index');

Route::POST('/blogs/store','App\Http\Controllers\Pagescontroller@store');

Route::GET('/blogs/{blog}/show','App\Http\Controllers\Pagescontroller@show');

Route::GET('/blogs/{blog}/edit','App\Http\Controllers\Pagescontroller@edit');

Route::PATCH('/blogs/{blog}','App\Http\Controllers\Pagescontroller@update');

Route::DELETE('/blogs/{blog}','App\Http\Controllers\Pagescontroller@destroy');

