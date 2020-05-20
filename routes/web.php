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
    return view('welcome');
});
Route::get('/home/faqs', function () {
    return view('faq');
});

Route::get('/home/ranking', function () {
    return view('ranking');
});

Route::get('/home/perfil', function () {
    return view('profile');
});

Route::get('/home/admin', function () {
    return view('admin');
});

Route::post('/home/admin/agregar', 'questionController@agregar');

Route::post('/home/play', 'questionController@pregunta');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
