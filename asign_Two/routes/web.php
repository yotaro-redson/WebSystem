<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\RecordController;
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
    return view('welcome');
});



Route::post('/record/create',[RecordController::class,'store'])->name('record.create');
Route::get('/record',[RecordController::class,'index'])->name('record.index');
Route::delete('/record/{record}',[RecordController::class,'destroy'])->name('record.destroy');
Route::get('/record/{record}/edit',[RecordController::class,'edit'])->name('record.edit');
Route::put('/record/{record}',[RecordController::class,'update'])->name('record.update');
