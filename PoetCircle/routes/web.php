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

Route::get('/show', [
    'uses' => 'Poet_Crud@index',
    'as' => 'poetas'
]);

Route::get('/insert', [
    'uses' => 'Poet_Crud@create',
    'as' => 'insert'
]);

Route::get('/detail/{id}', 'Poet_Crud@show');

Route::get('/delete/{id}', 'Poet_Crud@destroy');

Route::post('/save', [
    'uses' => 'Poet_Crud@store',
    'as' => 'save'
]);

Route::post('/update', 'Poet_Crud@update');
