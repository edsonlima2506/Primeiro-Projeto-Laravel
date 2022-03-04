<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

// Utilizando o método get fazemos uma requisição
Route::get("/", [EventController::class, 'index']);
Route::get("/events/create", [EventController::class, 'create']);
Route::get("/contact", [EventController::class, 'contact']);
Route::get("/login", [EventController::class, 'login']);
Route::get("/signup", [EventController::class, 'signup']);

// Aqui usamos o POST para enviar dados
Route::post("/events", [EventController::class, 'store']);