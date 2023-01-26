<?php

use App\Http\Controllers\AssortmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/assortment', [AssortmentController::class, 'index'])->name('assortment.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/bestellingen', [DashboardController::class, 'bestellingen'])->middleware(['auth', 'verified'])->name('bestellingen');
Route::get('/assortiment', [DashboardController::class, 'assortiment'])->middleware(['auth', 'verified'])->name('assortiment');
Route::get(('/medewerkers'), [DashboardController::class, 'medewerkers'])->middleware(['auth', 'verified'])->name('medewerkers');
Route::get('/dash/register', function () {
    return view('dash.registrate');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
