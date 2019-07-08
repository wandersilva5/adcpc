<?php

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function (){
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('index', 'UsersController@index')->name('users.index');
        Route::get('{id}/show', 'UsersController@show')->name('users.show');
        Route::get('create', 'UsersController@create')->name('users.create');
        Route::post('store', 'UsersController@store')->name('users.store');
        Route::any('{id}/edit', 'UsersController@edit')->name('users.edit');
        Route::any('{id}/update', 'UsersController@update')->name('users.update');
        Route::get('perfil', 'UsersController@perfil')->name('users.perfil');
        Route::any('{id}/update-perfil', 'UsersController@updatePerfil')->name('users.update-perfil');
        Route::post('destroy', 'UsersController@destroy')->name('users.destroy');
    });
});