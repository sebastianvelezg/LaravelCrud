<?php

use Illuminate\Support\Facades\Route;

//home route
Route::get('/', 'HomeController@index')->name('home.index');

// //sneakers index
Route::get("/sneakers", 'App\Http\Controllers\SneakerController@index')->name("sneakers.index");

//create sneaker
Route::get("/sneakers/create", 'App\Http\Controllers\SneakerController@create')->name("sneakers.create");

//edit sneaker
Route::get("/sneakers/{id}/edit", 'App\Http\Controllers\SneakerController@edit')->name("sneakers.edit");

//store sneaker
Route::post("/sneakers", 'App\Http\Controllers\SneakerController@store')->name("sneakers.store");

//update sneaker
Route::patch("/sneakers/{id}", 'App\Http\Controllers\SneakerController@update')->name("sneakers.update");

//destroy sneaker
Route::delete("/sneakers/{id}", 'App\Http\Controllers\SneakerController@destroy')->name("sneakers.destroy");

//show sneaker
Route::get("/sneakers/{id}", 'App\Http\Controllers\SneakerController@show')->name("sneakers.show");
