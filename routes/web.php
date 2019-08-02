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
        Route::get('{id}/edit', 'UsersController@edit')->name('users.edit');
        Route::post('{id}/update', 'UsersController@update')->name('users.update');
        Route::get('{id}/perfil', 'UsersController@perfil')->name('users.perfil');
        Route::post('{id}/update-perfil', 'UsersController@updatePerfil')->name('users.update-perfil');
        Route::post('{id}/destroy', 'UsersController@destroy')->name('users.destroy');
    });

    Route::group(['prefix' => 'ata'], function () {
        Route::resource('/', 'AtaController@index');
        Route::get('/', 'AtaController@index')->name('ata.index');
        Route::get('index', 'AtaController@index')->name('ata.index');
        Route::get('{id}/show', 'AtaController@show')->name('ata.show');
        Route::get('create', 'AtaController@create')->name('ata.create');
        Route::post('store', 'AtaController@store')->name('ata.store');
        Route::get('{id}/edit', 'AtaController@edit')->name('ata.edit');
        Route::post('{id}/update', 'AtaController@update')->name('ata.update');
        Route::post('{id}/destroy', 'AtaController@destroy')->name('ata.destroy');
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
    });
    Route::group(['prefix' => 'ofertas'], function () {
        Route::get('/', 'OfertasController@index')->name('ofertas.index');
        Route::get('index', 'OfertasController@index')->name('ofertas.index');
        Route::get('{id}/show', 'OfertasController@show')->name('ofertas.show');
        Route::get('create', 'OfertasController@create')->name('ofertas.create');
        Route::post('store', 'OfertasController@store')->name('ofertas.store');
        Route::get('{id}/edit', 'OfertasController@edit')->name('ofertas.edit');
        Route::post('{id}/update', 'OfertasController@update')->name('ofertas.update');
        Route::post('{id}/destroy', 'OfertasController@destroy')->name('ofertas.destroy');
    });

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', 'RolesController@index')->name('roles.index');
        Route::get('index', 'RolesController@index')->name('roles.index');
        Route::get('{id}/show', 'RolesController@show')->name('roles.show');
        Route::get('create', 'RolesController@create')->name('roles.create');
        Route::post('store', 'RolesController@store')->name('roles.store');
        Route::get('{id}/edit', 'RolesController@edit')->name('roles.edit');
        Route::post('{id}/update', 'RolesController@update')->name('roles.update');
        Route::post('{id}/destroy', 'RolesController@destroy')->name('roles.destroy');
    });
    
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', 'PermissionsController@index')->name('permissions.index');
        Route::get('index', 'PermissionsController@index')->name('permissions.index');
        Route::get('{id}/show', 'PermissionsController@show')->name('permissions.show');
        Route::get('create', 'PermissionsController@create')->name('permissions.create');
        Route::post('store', 'PermissionsController@store')->name('permissions.store');
        Route::get('{id}/edit', 'PermissionsController@edit')->name('permissions.edit');
        Route::post('{id}/update', 'PermissionsController@update')->name('permissions.update');
        Route::post('{id}/destroy', 'PermissionsController@destroy')->name('permissions.destroy');
    });
});