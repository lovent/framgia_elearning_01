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

Auth::routes();

// Route::get('/login' , 'Auth\LoginController@index')->name('login');
// Route::get('/register' , 'Auth\RegisterController@index')->name('register');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/classes', 'HomeController@classes')->name('classes');
Route::get('/fee', 'HomeController@fee')->name('fee');
Route::get('/support', 'HomeController@support')->name('support');
Route::get('/teacher', 'HomeController@teacher')->name('teacher');
