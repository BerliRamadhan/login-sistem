<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\Siswa;
use App\Http\Controllers\SiswaController;
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
    return view('welcome', [
        'siswas' => Siswa::all()
    ]);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, "login"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/edit/{siswa}',[SiswaController::class, "edit"]);
Route::post('/update',[SiswaController::class, "update"]);
Route::get('/hapus/{id}',[SiswaController::class, "hapus"]);
Route::get('/create',[SiswaController::class, "create"]);
Route::post('/store',[SiswaController::class, "store"]);
