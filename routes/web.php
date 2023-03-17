<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','\App\Http\Controllers\IndexController@index')->name('index');
Route::get('/{link}','\App\Http\Controllers\IndexController@show')->name('index.show');
Route::get('/administration/index','\App\Http\Controllers\Admin\AdminController@index')->name('admin.index');
Route::post('/administration/index','\App\Http\Controllers\Admin\AdminController@update')->name('admin.update');
Route::post('/administration/index/consultacii/edit','\App\Http\Controllers\Admin\Service\ConsultationController@update')->name('admin.service.consultation.update');
Route::get('/administration/index/create_service','\App\Http\Controllers\Admin\Service\ServiceController@create')->name('admin.service.create');
Route::post('/administration/index/create_service','\App\Http\Controllers\Admin\Service\ServiceController@store')->name('admin.service.store');
Route::delete('/administration/index/delete_service/{link}','\App\Http\Controllers\Admin\Service\ServiceController@delete')->name('admin.service.delete');
Route::get('/administration/index/edit_service/{link}','\App\Http\Controllers\Admin\Service\ServiceController@edit')->name('admin.service.edit');