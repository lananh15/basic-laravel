<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;
use App\Models\Ninja;

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

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');

Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');

Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');

Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');

Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');
