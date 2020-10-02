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

// viewのwelcom.phpを呼び出す
// Route::get('/', function () {
//     return view('welcome');

// getで/にリクエストがきたらTaskController コントローラーの index メソッドを呼びだす
Route::get('/','TodosController@index'); 
Route::resource('todos','TodosController');

