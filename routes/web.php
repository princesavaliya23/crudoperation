<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\countrycontroller;
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

Route::get('/',[countrycontroller::class,'showcountry'])->name('countrys.showcountry');

Route::get('countrys/user',[countrycontroller::class,'user']);

Route::get('countrys/countrys/newuser',[countrycontroller::class,'newuser']);

Route::get('countrys/create',[countrycontroller::class,'create'])->name('countrys.create');

Route::post('countrys/store',[countrycontroller::class,'store'])->name('countrys.store');

Route::get('countrys/{id}/edit',[countrycontroller::class,'edit']);

Route::put('countrys/{id}/update',[countrycontroller::class,'Update']);

Route::delete('countrys/{id}/delete',[countrycontroller::class,'destroy']);

Route::get('countrys/{id}/show',[countrycontroller::class,'show']);