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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::get('data/visualizer', 'VisualizerController@index')->name('visualizer');
    Route::post('data/import', 'VisualizerController@importDataSet')->name('import');
    // Data Reriever
    Route::get('data/retrieve', 'VisualizerController@retrieveMapData')->name('map.data');
    Route::get('contact-us', 'VisualizerController@contactUs')->name('contact');
    Route::get('post/single', 'PostController@singlePost')->name('single');
});
