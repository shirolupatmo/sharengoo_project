<?php

Route::get('/', function () {
    return view('Auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
