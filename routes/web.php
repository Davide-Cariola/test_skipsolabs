<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('form', function(){
    return view('form');
})->middleware('auth')->name('form');

Route::post('form/store', function(Request $request){
    dd($request->all());
})->name('store');

Route::get('admin', function(){
    return view('admin');
})->name('admin');