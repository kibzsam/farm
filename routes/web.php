<?php
use Yajra\Datatables\Datatables;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@home');

Route::post('/animalrecord', 'AnimalRecordController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/record1','AnimalRecordController@index');
    Route::get('/breeding','BreedingController@BreedingView');
    Route::get('/production','ProductionController@ProductionView');
    Route::get('/animal_details','AdetailsController@detailsView');
    Route::get('=analytics','HomeController@analyticsView');
    });
Route::post('/search','AdetailsController@detailsView');
Route::post('/edit_production','ProductionController@edit_production');
Route::post('/delete_production','ProductionController@delete_production');
Route::post('/edit_breeding','BreedingController@edit_breeding');
Route::post('/delete_breeding','BreedingController@delete_breeding');
Route::post('/delete_bull','BreedingController@delete_bull');
Route::post('/edit_bull','BreedingController@edit_bull');
Route::post('/edit_animal','AnimalRecordController@edit_animal');
Route::post('/delete_animal','AnimalRecordController@delete_animal');
Route::post('/bull','BreedingController@storeBull');
Route::post('/breeding','BreedingController@storebreeding');
Route::post('/production','ProductionController@storeProduction');


