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
    return view('landing/home');
});
Route::get('/loginguru', function () {
    return view('loginguru');
});
Route::get('/services', function () {
    return view('landing/services');
});
Route::get('/projects', function () {
    return view('landing/projects');
});
Route::get('/about', function () {
    return view('landing/about');
});
Route::get('/blog', function () {
    return view('landing/blog');
});
Route::get('/contact', function () {
    return view('landing/contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/tabel', 'DashboardController@tabel');
Route::get('/form', 'DashboardController@form');

Route::get('/guru', 'GuruController@index');
Route::get('/guru/get_datatable', 'GuruController@get_datatable');
