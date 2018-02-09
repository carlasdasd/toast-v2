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

Route::get('/', 'RouteController@login');
Route::get('home/add_professor', 'RouteController@addProfessor');
Route::post('home/add_professor','UserController@createProfessor')->name('createProfessor');
Route::get('home/view_professor','UserController@viewProfessor');
Route::get('home/add_student', 'RouteController@addStudent');
Route::post('home/add_student','UserController@createStudent')->name('createStudent');
Route::get('home/view_student','UserController@viewStudent');


Route::resource('users','UserController');
Route::get('home', 'HomeController@index')->middleware('revalidate');



//Auth::routes();

 // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
