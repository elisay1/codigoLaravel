<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('nosotros', 'menu.nosotros')->name('nosotros');
Route::view('contacto', 'menu.contacto')->name('contacto');


//TODO: creamos la routa para servicios
//Route::view('servicios', 'menu.servicios', compact('servicios'))->name('servicios');
//TODO: esto es del primera routa
//Route::get('servicios', 'App\Http\Controllers\ServiciosController@servicios')->name('servicios');
Route::get('servicios', 'App\Http\Controllers\Servicios2Controller@index')->name('servicios');

//TODO: Generar las 7 rutas de los metodos del controlador 2
//Route::resource('servicios','Servicios2Controller');

