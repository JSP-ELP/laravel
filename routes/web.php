<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Principal');

Route::get('/lista', function () {
    return view('lista');
})->name('Juanito');

Route::get('/lista/{id}/{nombre}', function ($id, $nombre) {
    return "Hola tu eres el id $id y tu nombre es $nombre";
});

Route::get('/estudiante', function () {
    $id = 5 ;
    $nombre = 'Juan';
    $data = ['id'=>$id,'nombre'=>$nombre,];
    return view('estudiantes', $data);
});
