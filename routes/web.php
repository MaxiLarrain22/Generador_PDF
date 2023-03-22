<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
   return view('welcome');
});

Route::get('/pdf', function () {
    return view('prueba');
 });

Route::get('download', function () {
    $pdf =PDF :: loadView('redes');
    return $pdf->stream();
})-> name('download');
