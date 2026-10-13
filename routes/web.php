<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnershipController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/kemitraan', [PartnershipController::class, 'index'])->name('partnership');
Route::post('/kemitraan', [PartnershipController::class, 'store'])->name('partnership.store');