<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);


Auth::routes(['register' => true]); //Modify a true or false

