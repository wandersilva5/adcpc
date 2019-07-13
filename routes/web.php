<?php

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['auth']], function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index')->name('users.index');
        Route::get('index', 'UsersController@index')->name('users.index');
        Route::get('{id}/show', 'UsersController@show')->name('users.show');
        Route::get('create', 'UsersController@create')->name('users.create');
        Route::post('store', 'UsersController@store')->name('users.store');
        Route::post('{id}/edit', 'UsersController@edit')->name('users.edit');
        Route::post('{id}/update', 'UsersController@update')->name('users.update');
        Route::get('perfil', 'UsersController@perfil')->name('users.perfil');
        Route::post('{id}/update-perfil', 'UsersController@updatePerfil')->name('users.update-perfil');
        Route::post('destroy', 'UsersController@destroy')->name('users.destroy');
    });

    Route::group(['prefix' => 'ata'], function () {
        Route::get('/', 'AtaController@index')->name('ata.index');
        Route::get('index', 'AtaController@index')->name('ata.index');
        Route::get('{id}/show', 'AtaController@show')->name('ata.show');
        Route::get('create', 'AtaController@create')->name('ata.create');
        Route::post('store', 'AtaController@store')->name('ata.store');
        Route::get('{id}/edit', 'AtaController@edit')->name('ata.edit');
        Route::post('{id}/update', 'AtaController@update')->name('ata.update');
        Route::post('{id}/destroy', 'AtaController@destroy')->name('ata.destroy');
        Route::post('/mult-upload', 'AtaController@multUpload')->name('ata.mult-upload');
    });

    Route::group(['prefix' => 'dizimos'], function () {
        Route::get('/', 'DizimosController@index')->name('dizimos.index');
        Route::get('index', 'DizimosController@index')->name('dizimos.index');
        Route::get('{id}/show', 'DizimosController@show')->name('dizimos.show');
        Route::get('create', 'DizimosController@create')->name('dizimos.create');
        Route::post('store', 'DizimosController@store')->name('dizimos.store');
        Route::get('{id}/edit', 'DizimosController@edit')->name('dizimos.edit');
        Route::post('{id}/update', 'DizimosController@update')->name('dizimos.update');
        Route::post('{id}/destroy', 'DizimosController@destroy')->name('dizimos.destroy');
        Route::post('/mult-upload', 'DizimosController@multUpload')->name('dizimos.mult-upload');
    });
});