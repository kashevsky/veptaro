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

Route::get('/','\App\Http\Controllers\Main\IndexController')->name('index');
Route::get('/consultation','\App\Http\Controllers\Consultation\IndexController')->name('consultation.index');
Route::get('/training','\App\Http\Controllers\Training\IndexController')->name('training.index');
Route::get('/arrangements','\App\Http\Controllers\Arrangements\IndexController')->name('arrangements.index');
Route::get('/blog','\App\Http\Controllers\Blog\IndexController')->name('blog.index');

