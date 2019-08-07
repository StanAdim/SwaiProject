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

Route::view('/','main.welcome');
Route::view('/about','main.about');
Route::get('/opportunities','OpportunityController@index');
Route::post('/opportunities','OpportunityController@store');
Route::get('/replies','OpportunityController@create');

Route::get('/students','StudentsController@index');
Route::get('/students/create','StudentsController@create');
Route::post('/students','StudentsController@store');
Route::get('/students/show/{student}','StudentsController@show');
Route::get('/students/edit/{student}','StudentsController@edit');
Route::patch('/students/{student}','StudentsController@update');
Route::delete('/students/{student}','StudentsController@destroy');



//Route::get('/dipYears','index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
