<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});