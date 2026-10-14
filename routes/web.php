<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    MenuController,
    GalleryController,
    PartnershipController,
};

Route::get('/',              [HomeController::class, 'index'])->name('home');
Route::get('/tentang',       [AboutController::class, 'index'])->name('about');
Route::get('/menu',          [MenuController::class, 'index'])->name('menu');
Route::get('/galeri',        [GalleryController::class, 'index'])->name('gallery');

Route::get('/kemitraan',     [PartnershipController::class, 'index'])->name('partnership');
Route::post('/kemitraan',    [PartnershipController::class, 'store'])->name('partnership.store');