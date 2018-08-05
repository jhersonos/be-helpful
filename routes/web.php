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

Route::get('test', function () {
    event(new App\Events\StatusLiked('Someone'));
    return "Event has been sent!";
});

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('interna', function () {
    return view('interna');
})->name('interna');

Route::get('/foro', function () {
    return view('foro');
})->name('foro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth',])->group(function(){
    Route::resource('alertas',         'AlertaController');
    Route::resource('campains',        'CampainsController');
});
