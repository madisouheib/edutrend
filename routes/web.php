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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/blogs', 'HomeController@indexBlog')->name('indexBlog');
Route::get('/univs',  'HomeController@indexUnivs')->name('indexUnivs');
Route::get('/institus', 'HomeController@indexInstitus')->name('indexInstitus');
Route::get('/aboutus',  'HomeController@indexAbout')->name('indexAbout');
Route::get('/partenariat', 'HomeController@indexPartenariat')->name('indexPartenariat');
Route::get('/researchs', 'HomeController@indexResearchs')->name('indexResearchs');
Route::get('/article/{slug}', 'HomeController@indexPost')->name('indexPost');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
