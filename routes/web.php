<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('userChart', 'UserChartController');
Route::resource('geoChart', 'GeoChartsController');
Route::resource('pusher', 'PusherController');
Route::resource('spatie', 'SpatieController');
Route::resource('menu', 'MenuController');

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

Route::get('glide/{path}', function($path){
    $server = \League\Glide\ServerFactory::create([
        'source' => app('filesystem')->disk('public')->getDriver(),
    'cache' => storage_path('glide'),
    ]);
    return $server->getImageResponse($path, Input::query());
})->where('path', '.+');

Route::get('songs/create', [
    'uses' => 'SongsController@create',
    'as' => 'song.create'
]);

Route::post('songs', [
    'uses' => 'SongsController@store',
    'as' => 'song.store'
]);
