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

Route::get('/', 'HomeController@home');

Route::get('/dashboard', 'DashboardController@index');

Route::resource('/reports', 'ExpenseReportController');

Route::get('reports/{id}/delete/confirm', 'ExpenseReportController@confirmDelete');
Route::get('reports/{id}/confirmSendEmail', 'ExpenseReportController@confirmSendEmail');
Route::post('reports/{id}/sendEmail', 'ExpenseReportController@sendEmail');

Route::get('reports/{report}/expenses/create', 'ExpenseController@create');
Route::post('reports/{report}/expenses/store', 'ExpenseController@store');

// Route::get('/api/reports', 'PruebaController@list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
