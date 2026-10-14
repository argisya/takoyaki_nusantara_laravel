<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PartnershipController;

Route::get('/',           [HomeController::class, 'index'])->name('home');
Route::get('/tentang',    [AboutController::class, 'index'])->name('about');
Route::get('/menu',       [MenuController::class, 'index'])->name('menu');

Route::get('/kemitraan',  [PartnershipController::class, 'index'])->name('partnership');
Route::post('/kemitraan', [PartnershipController::class, 'store'])->name('partnership.store');