<?php

use App\Http\Controllers\EjemplerUsuarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\TruckTruckerController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('asociar',[TruckTruckerController::class,'asociar']);
//  Route::post('asociar/truck_trucker',[TruckTruckerController ::class,'store'])->name('truck_trucker.store');

Route::get('relacionar',[EjemplerUsuarioController::class,'asociar']);
Route::post('relacionar/ejempler_usuario', [EjemplerUsuarioController::class,'store'])->name('ejempler_usuario.store');

//crud de libro
Route::get('trabajo/create',[LibroController::class,'create']);
Route::post('libro/store', [LibroController::class,'store'])->name('libro.store');
 Route::get('trabajo/listar',[LibroController::class,'index'])->name('trabajo.index');
 Route::get('trabajo/{trabajo}',[LibroController::class,'show'])->name('trabajo.show');
 Route::put('trabajo/{trabajo}',[LibroController::class,'update'])->name('trabajo.update');//nuevo
 Route::delete('trabajo/{trabajo}',[LibroController::class,'destroy'])->name('trabajo.destroy');
 Route::get('trabajo/{trabajo}/editar',[LibroController::class,'edit'])->name('trabajo.edit');
