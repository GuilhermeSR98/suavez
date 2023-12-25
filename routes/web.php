<?php

use App\Http\Controllers\Atendentes;
use App\Http\Controllers\RegistroAtendimento;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [RegistroAtendimento::class, 'index'])->name('home');;
Route::get('/chatPego', [RegistroAtendimento::class, 'peguei'])->name('atendente.peguei');
Route::resource('/atendente', Atendentes::class);
