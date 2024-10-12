<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contraladorVistas;


/* rutas para trabajo con controlador */

Route::get('/',[contraladorVistas::class,'home'])->name('rutainicio');

Route::get('/formulario',[contraladorVistas::class,'formulario'])->name('rutaformulario');

Route::get('/clientes',[contraladorVistas::class,'consulta'])->name('rutaclientes');

Route::post('/enviar',[contraladorVistas::class,'procesarCliente' ])->name('procesar');






/* 
    Route::get('/', function() {
    return view('inicio');  })->name('rutainicio'); 

    Route::get('/formulario', function() {
    return view('formulario');  })->name('rutaformulario'); 

    Route::get('/clientes', function() {
    return view('clientes');  })->name('rutaclientes'); 
*/


/* 
Route::view('/','inicio')->name('rutainicio');

Route::view('/form','formulario')->name('rutaformulario');

Route::view('/clientes','clientes')->name('rutaclientes'); */

Route::view('/componentes','componetes')->name('rutacomponentes');