<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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

Route::get('/', [myController::class, 'trangchu']);
Route::get('/lienhe', [myController::class, 'lienhe']);
Route::post('/lienhe', [myController::class, 'postlienhe']);
Route::get('/sukien', [myController::class, 'sukien']);
Route::get('/sk1', [myController::class, 'sk1']);
Route::get('/thanhtoan', [myController::class, 'thanhtoan']);
Route::get('/tttc', [myController::class, 'tttc']);





