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
    return view('index');
})->name('home');

Route::resource('userChart', 'UserChartController');
Route::resource('geoChart', 'GeoChartsController');
Route::resource('pusher', 'PusherController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/report', 'ReportsController@index')->name('report');
Route::post('/report', 'ReportsController@displayReport')->name('report');
Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});
