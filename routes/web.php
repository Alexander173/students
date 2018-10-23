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

Route::get('categories', 'CategoriesController@index')->name('categories.index');
// Route::get('categories/{id}', 'CategoriesController@show')->name('categories.show');

Route::get('categories/create', 'CategoriesController@create')->name('categories.create');
Route::post('categories/store', 'CategoriesController@store')->name('categories.store');
Route::delete('categories/{category}', 'CategoriesController@destroy')->name('categories.destroy');
