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

Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
Route::get('logout', 'AuthController@getLogout');

Route::get('/', 'HomeController@index')->middleware('auth');
Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('chart', 'ChartController@index')->middleware('auth');
Route::get('body', 'BodyController@index')->middleware('auth');
Route::get('body/data', 'BodyController@data')->middleware('auth');

Route::group(['prefix' => 'table', 'middleware' => 'auth'], function () {
    Route::get('table', 'TableController@table');
    Route::get('table/ori', 'TableController@tableOri');
    Route::get('data', 'TableController@dataTable');
    Route::get('data/ori', 'TableController@dataTableOri');

    Route::get('new', 'TableController@newTable');
});

Route::group(['prefix' => 'form', 'middleware' => 'auth'], function () {
    Route::get('general', 'FormController@general');
    Route::get('advanced', 'FormController@advanced');
    Route::get('editor', 'FormController@editor');
    Route::get('custom', 'FormController@custom');
});

Route::group(['prefix' => 'data', 'middleware' => 'auth'], function () {
    Route::get('table1', 'TableController@data1');
    Route::get('table2', 'TableController@data2');

    Route::match(['get', 'post'], 'form1', 'FormController@data1');
});
