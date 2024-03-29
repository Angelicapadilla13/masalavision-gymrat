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

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/', function () {
    return view('Login');
});

Route::get('Terms and Condition', function () {
    return view('Terms and Condition');
});

Route::view("Dashboard", 'Dashboard');
Route::view("Exercises", 'Exercises');
Route::view("Account", 'Account');
Route::view("Admins", 'Admins');
Route::view("Users", 'Users');
