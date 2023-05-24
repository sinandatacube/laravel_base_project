<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
//     return view('home',['sinan'=> 'my first laravel project']);
// });
// Route::get(uri:'/',action: 'App\Http\Controllers\TodoController@home')->name(name:'home');
Route::get(uri:'/',action: 'App\Http\Controllers\TodoController@home')->name(name:'home');
Route::post(uri:'/insert',action: 'App\Http\Controllers\TodoController@insert')->name(name:'insert');
Route::post(uri:'/updatetitle/{todo}',action: 'App\Http\Controllers\TodoController@updatetitle')->name(name:'upatetitle');
Route::post(uri:'/delete/{todo}',action: 'App\Http\Controllers\TodoController@deletetitle')->name(name:'delete');

Route::get(uri:'/update/{id}',action: 'App\Http\Controllers\TodoController@update')->name(name:'update');
// Route::get(uri:'/get/{id}',action: 'App\Http\Controllers\TodoController@getdata')->name(name:'get');
Route::post(uri:'/get/{id}',action: 'App\Http\Controllers\TodoController@getdata')->name(name:'get');

// Route::post('/update/{id}', function ($id) {
//     print($id);
//     return view('update',);
// });
// Route::get('sample/{id}','HomeController@index')->where(['id' => '[0-9]{1,5}']);
// Route::get(uri:'/about',action: function (){
//     return view('about',['sinan'=> 'my first laravel project']);

// });
