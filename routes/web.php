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
// Route::get('/', 'HelloController@Index');

use App\Http\Controllers\HelloController;

// Route::get('/', 'HelloController@Index')->name('hello');                 // 名前付きRoute
Route::get('/hello/{id}', 'HelloController@index')->where('id', '[0-9]+');   // 条件(正規表現)付きRoute 
Route::get('/hello/other', 'HelloController@other');

