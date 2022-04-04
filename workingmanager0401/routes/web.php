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

Route::get('/work_reports/login','App\Http\Controllers\WorkReportsController@login');
Route::get('/work_reports','App\Http\Controllers\WorkReportsController@index');
Route::get('/work_reports/create','App\Http\Controllers\WorkReportsController@create');
Route::post('/work_reports/store','App\Http\Controllers\WorkReportsController@store');
Route::get('/employees','App\Http\Controllers\WorkReportsController@employees');
Route::post('/employees/detail','App\Http\Controllers\WorkReportsController@detail');
Route::get('/employees/detail','App\Http\Controllers\WorkReportsController@detail');
Route::post('/employees/edit','App\Http\Controllers\WorkReportsController@edit');
Route::post('/employees/delete','App\Http\Controllers\WorkReportsController@delete');
Route::post('/employees/update','App\Http\Controllers\WorkReportsController@update');

