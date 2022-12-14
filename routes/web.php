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

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
	return view('body');
});

Route::get('/anjab', function () {
	return view('layouts.anjab');
});

Route::get('/abk', function () {
	return view('layouts.abk');
});

Route::get('/pejab', function(){
	return view('layouts.petajab');
});

Route::get('/team', function(){
	return view('team');
});

Route::get('/act', function(){
	return view('act');
});

Route::get('/agenda', function(){
	return view('agenda');
});

Route::get('/pertek', function(){
	return view('pertek');
});

Route::get('/servicedetail', function(){
	return view('detail_service');
});

Route::get('/pengolahan', function(){
	return view('pengolahan');
});

Route::get('/tahapan', function(){
	return view('tahapan');
});

Route::get('/portfolio', function(){
	return view('portfolio');
});
