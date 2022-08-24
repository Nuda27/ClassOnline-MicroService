<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('mentors', 'App\Http\Controllers\MentorController@index');
Route::get('mentors/{id}', 'App\Http\Controllers\MentorController@show');
Route::post('mentors', 'App\Http\Controllers\MentorController@create');
Route::put('mentors/{id}', 'App\Http\Controllers\MentorController@update');
Route::delete('mentors/{id}', 'App\Http\Controllers\MentorController@destroy');

Route::post('courses', 'App\Http\Controllers\CourseController@create');
Route::put('courses/{id}', 'App\Http\Controllers\CourseController@update');
