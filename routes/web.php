<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPaqueteController;

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


Route::get('/contact', function () {
    return view('layouts.contact'); // Asegúrate de que el nombre del archivo Blade sea correcto
})->name('contact');

Route::post('/details', [PublicPaqueteController::class, 'show'])->name('details');



Route::get('/', [PublicPaqueteController::class, 'index'])->name('home');

Route::get('/packages', [PublicPaqueteController::class, 'showPackages'])->name('packages');

//Route::get('/packagesdetail/{id}', [PublicPaqueteController::class, 'show'])->name('packagesdetail');

