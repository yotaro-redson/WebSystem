<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/record",[RecordController::class,'get_record']);
Route::post("/record",[RecordController::class,'create_record']);
Route::delete("/record/{record}",[RecordController::class,'destroy']);

Route::get('/record/{record}/edit',[RecordController::class,'edit']);
Route::put('/record/{record}',[RecordController::class,'update']);

