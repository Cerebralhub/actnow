<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\DisneyplusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/test', [UserController::class, 'create']);
Route::post('/test', [UserController::class, 'store']);

Route::get("/register", [RegController::class,'index']);
Route::post("/register", [RegController::class,'register']);

Route::get("/registerUser", [UserController::class,'registerForm']);
Route::post("/registerUser", [UserController::class,'save']);

Route::get("/login", [UserController::class,'index']);
Route::post("/login", [UserController::class,'login']);

Route::get("/viewRegistrants", [RegController::class,'regList']);
Route::any("/filterRegistrants", [RegController::class,'filter']);
Route::any("/delete/{id}", [RegController::class,'destroy']);



Route::get('profile', [ProfileController::class, 'index']);
Route::get('add-profile', [ProfileController::class, 'create']);
Route::post('add-profile', [ProfileController::class, 'store']);
Route::get('edit-profile/{id}', [ProfileController::class, 'edit']);
Route::put('update-profile/{id}', [ProfileController::class, 'update']);
Route::delete('delete-profile/{id}', [ProfileController::class, 'destroy']);
Route::get('search-profile', [ProfileController::class, 'search']);
Route::get('/download/{id}', [ProfileController::class, 'download']);


Route::get('disneyplus', [DisneyplusController::class, 'create'])->name('disneyplus.create');
Route::post('disneyplus', [DisneyplusController::class, 'store'])->name('disneyplus.store');
Route::get('disneyplus/list', [DisneyplusController::class, 'index'])->name('disneyplus.index');
Route::get('/downloadPDF/{id}',[DisneyplusController::class, 'downloadPDF']);



Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
});
