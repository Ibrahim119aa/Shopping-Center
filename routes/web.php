<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contstd;
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
Route::get('Cont',[Contstd::class,'Index']);
Route::post('Store',[Contstd::class,'Store']);
Route::post('See',[Contstd::class,'dekh']);
Route::view('Display','Display');