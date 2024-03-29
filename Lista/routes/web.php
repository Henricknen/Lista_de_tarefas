<?php

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home']);     // rota açessa a raiz '/' do site será encaminhado para 'HomeController' para action 'home'
Route::post('/', [HomeController::class, 'add']);       

Route::get('/delete/{id}', [HomeController::class, 'del']);