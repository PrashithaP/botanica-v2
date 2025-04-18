<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\FlowersController;
use App\Http\Controllers\AloeController;
use App\Http\Controllers\BonsaiController;



Route::get('/', function () {
    return view('welcome');
});

// Snake section

Route::get('/snake', function () {
    return view('snake');
});

Route::get('/snake', 'App\Http\Controllers\ImagesController@index');

Route::get('/snake/create', 'App\Http\Controllers\ImagesController@create');

Route::post('/snake', 'App\Http\Controllers\ImagesController@store');

Route::get('/show/{image}', 'App\Http\Controllers\ImagesController@show');


Route::delete('/snake/{image}', [ImagesController::class, 'destroy'])->name('snake.destroy');


Route::get('/snake/{image}/edit','App\Http\Controllers\ImagesController@edit');

Route::patch('/snake/{image}','App\Http\Controllers\ImagesController@update');



// flower section

Route::get('/flower', function () {
    return view('flower');
});


Route::get('/flower', 'App\Http\Controllers\FlowersController@index');

Route::get('/flower/flowercreate', 'App\Http\Controllers\FlowersController@flowercreate');

Route::post('/flower', 'App\Http\Controllers\FlowersController@store');

Route::get('/flowershow/{flower}', 'App\Http\Controllers\FlowersController@flowershow');

Route::delete('/flower/{flower}', [FlowersController::class, 'destroy'])->name('flower.destroy');

Route::get('/flower/{flower}/floweredit','App\Http\Controllers\FlowersController@floweredit');

Route::patch('/flower/{flower}','App\Http\Controllers\FlowersController@update');



// aloe vera section

Route::get('/aloe', function () {
    return view('aloe');
});


Route::get('/aloe', 'App\Http\Controllers\AloeController@index');

Route::get('/aloe/aloecreate', 'App\Http\Controllers\AloeController@aloecreate');

Route::post('/aloe', 'App\Http\Controllers\AloeController@store');

Route::get('/aloeshow/{aloe}', 'App\Http\Controllers\AloeController@aloeshow');

Route::delete('/aloe/{aloe}', [AloeController::class, 'destroy'])->name('aloe.destroy');

Route::get('/aloe/{aloe}/aloeedit','App\Http\Controllers\AloeController@aloeedit');

Route::patch('/aloe/{aloe}','App\Http\Controllers\AloeController@update');



// bonsai section

Route::get('/bonsai', function () {
    return view('bonsai');
});


Route::get('/bonsai', 'App\Http\Controllers\BonsaiController@index');

Route::get('/bonsai/bonsaicreate', 'App\Http\Controllers\BonsaiController@bonsaicreate');

Route::post('/bonsai', 'App\Http\Controllers\BonsaiController@store');

Route::get('/bonsaishow/{bonsai}', 'App\Http\Controllers\BonsaiController@bonsaishow');

Route::delete('/bonsai/{bonsai}', [BonsaiController::class, 'destroy'])->name('bonsai.destroy');

Route::get('/bonsai/{bonsai}/bonsaiedit','App\Http\Controllers\BonsaiController@bonsaiedit');

Route::patch('/bonsai/{bonsai}','App\Http\Controllers\BonsaiController@update');





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
