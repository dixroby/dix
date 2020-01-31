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


Route::get('/', function () {
    return view('welcome');
});*/

Route::get ('/',"PaginasController@inicio");
Route::get ('/inicio',"PaginasController@inicio");
Route::get ('/about',"PaginasController@about");
Route::get ('/contact',"PaginasController@contact");
Route::get ('/forum',"PaginasController@forum");
//Route::get ('/inicio','EjemploController@inicio');
