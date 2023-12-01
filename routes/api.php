<?php

use App\Http\Controllers\ApicrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countrycontroller;
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

Route::get('cruds',[ApicrudController::class,'index']);
Route::post('cruds',[ApicrudController::class,'store']);
Route::get('cruds/{crud}',[ApicrudController::class, 'show']);
// Route::get('countrys/{id}/edit',[usercontoller::class, 'edit']);
Route::put('cruds/{crud}',[ApicrudController::class, 'update']);
Route::delete('cruds/{crud}',[ApicrudController::class, 'destroy']);
