<?php
use App\Http\Controllers\Register;
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


Route::get('',[ Register::class, 'home']);

Route::get('signup',[ Register::class, 'store']);

Route::get('home',[ Register::class, 'homepage']);

Route::post('home',[ Register::class, 'store']);

Route::delete('/register/{id}', [Register::class,"delete"])->name('delete.register');