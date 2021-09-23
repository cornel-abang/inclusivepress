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
    Route::get('post/otukpo', 'PostController@singlePost2')->name('otukpo');

    // Admin Auth Routes

    // dd(\Hash::make('inclusivepress2021@'));
    // Email: info@inclusivepress.io
    Route::get('login', 'AdminController@loginFrm')->name('login');
    Route::post('login', 'AdminController@loginPost');

    Route::group(['middleware'=>'auth:web', 'prefix'=> 'admin'], function(){
        Route::get('dashboard', 'AdminController@index')->name('dashboard');
        Route::get('create-article', 'ArticleController@create')->name('article.create');
        Route::get('articles', 'ArticleController@index')->name('articles');
        Route::post('create-article', 'ArticleController@store');
        Route::get('edit-article/{id}', 'ArticleController@edit')->name('article.edit');
        Route::post('edit-article/{id}', 'ArticleController@update');
        Route::get('articles/{slug}', 'ArticleController@articleByCat')->name('cat.articles');
        Route::get('destroy-article/{id}', 'ArticleController@destroy')->name('article.destroy');
        Route::get('logout', 'AdminController@logout')->name('logout');
        // Route::get('create-category', 'ArticleController@createCategory')->name('category.create');
    });
});
