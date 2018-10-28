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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('students', 'StudentsController');
Route::resource('groups','GroupController');
Route::resource('subjects','SubjectsController');
Route::resource('students.image','ImageController');
Route::resource('students.mark','MarkController');


Route::resource('categories', 'CategoriesController', ['except' => ['show']	]);
Route::get('shop/{path}', 'CategoriesController@show')->where('path', '[a-zA-Z0-9/_-]+')->name('categories.show');