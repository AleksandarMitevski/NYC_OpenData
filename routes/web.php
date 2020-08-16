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

Route::get('/', function(){
	return view('entry');
})->name('home');

Route::get('/SelectYear', function () {
	return view('SelectYear');
} )->name('SelectYear');

Route::get('/RawData', function(){
	return view('Raw-Data');
})->name('RawData');

Route::get('/AggregateData', 'DataExtractor@decadeReview')->name('AggData');

Route::get('/AggregateCityData', 'DataExtractor@decadeCityReview')->name('AggCData');

Route::get('/AggregateAgencyData', 'DataExtractor@decadeAgencyReview')->name('AggAData');


Route::get('year/{year}', 'DataExtractor@getData');

Route::get('year/City/{year}', 'DataExtractor@getCityData');

Route::get('year/agency/{year}', 'DataExtractor@getAgencyData');