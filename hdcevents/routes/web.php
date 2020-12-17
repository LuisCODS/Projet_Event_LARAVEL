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

Route::get('/', function () {
    return view('welcome'); //http://127.0.0.1:8000/
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/produtos', function () {
    return view('produtos'); 
});

Route::get('/produtos/{id$}', function ($id = null) {
    return view('product', ['id'=> $id]); 
});