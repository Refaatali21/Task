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
    return view('welcome');
});


//-------------- Open createproject ----------------//
Route::get('index/project', [App\Http\Controllers\createproject::class,'index'])->name('assignment.create_project');
Route::get('create/project', [App\Http\Controllers\createproject::class,'create'])->name('assignment.create');
Route::post('store/project', [App\Http\Controllers\createproject::class,'store']);
Route::get('edit/project/{id}', [App\Http\Controllers\createproject::class,'edit'])->name('assignment.edit');
Route::post('update/project/{id}', [App\Http\Controllers\createproject::class,'update']);
Route::get('delete/project/{id}', [App\Http\Controllers\createproject::class,'destroy']);
//-------------- End createproject ----------------//

//-------------- Open Clint ----------------------//
Route::get('show/client', [App\Http\Controllers\clientcontroller::class,'show'])->name('users.client');
Route::post('create/client', [App\Http\Controllers\clientcontroller::class,'create']);
Route::post('update/client/{id}', [App\Http\Controllers\clientcontroller::class,'update']);
Route::get('delete/clint/{id}', [App\Http\Controllers\clientcontroller::class,'destroy']);
//-------------- End Clint ----------------------//

//--------------- Open Admin----------------------//
Route::get('show/admin', [App\Http\Controllers\AdminController::class,'show'])->name('users.admin');
Route::post('create/admin', [App\Http\Controllers\AdminController::class,'create']);
Route::post('update/admin/{id}', [App\Http\Controllers\AdminController::class,'update']);
Route::get('delete/admin/{id}', [App\Http\Controllers\AdminController::class,'destroy']);
Route::get('/{page}', [App\Http\Controllers\AdminController::class,'index']);
//--------------- End Admin----------------------//
