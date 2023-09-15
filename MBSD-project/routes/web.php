<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapyController;

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

Route::get('top', [ScrapyController::class, 'top'])->name('top');

Route::get('/move',[ScrapyController::class, 'python_exe'])->name('python_exe');

Route::post('/post', [ScrapyController::class, 'scraping'])->name('scraping');
