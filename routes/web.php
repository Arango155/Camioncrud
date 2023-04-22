<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/',[\App\Http\Controllers\CamionController::class,'home'])->name('home');
Route::get('/create1',[\App\Http\Controllers\CamionController::class,'create1'])->name('create1');
Route::post('/add1',[\App\Http\Controllers\CamionController::class,'add1'])->name('add1');
Route::get('/delete1/{id}',[\App\Http\Controllers\CamionController::class,'delete1'])->name('delete1');
Route::delete('/destroy1/{id}',[\App\Http\Controllers\CamionController::class,'destroy1'])->name('destroy1');
Route::get('/edit1/{id}',[\App\Http\Controllers\CamionController::class,'edit1'])->name('edit1');
Route::put('/update1/{id}',[\App\Http\Controllers\CamionController::class,'update1'])->name('update1');




Route::get('/home2',[\App\Http\Controllers\CamionController::class,'home2'])->name('home2');
Route::get('/create2',[\App\Http\Controllers\CamionController::class,'create2'])->name('create2');

Route::post('/add2',[\App\Http\Controllers\CamionController::class,'add2'])->name('add2');
Route::get('/delete2/{id_transporte}',[\App\Http\Controllers\CamionController::class,'delete2'])->name('delete2');
Route::delete('/destroy2/{id_transporte}',[\App\Http\Controllers\CamionController::class,'destroy2'])->name('destroy2');
Route::get('/edit2/{id_placa}',[\App\Http\Controllers\CamionController::class,'edit2'])->name('edit2');
Route::put('/update2/{id_placa}',[\App\Http\Controllers\CamionController::class,'update2'])->name('update2');

