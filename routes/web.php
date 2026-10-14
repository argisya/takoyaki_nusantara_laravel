<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    MenuController,
    GalleryController,
    OutletsController,
    PartnershipController,
    ContactController,
};

Route::get('/',            [HomeController::class, 'index'])->name('home');
Route::get('/tentang',     [AboutController::class, 'index'])->name('about');
Route::get('/menu',        [MenuController::class, 'index'])->name('menu');
Route::get('/galeri',      [GalleryController::class, 'index'])->name('gallery');
Route::get('/outlet',      [OutletsController::class, 'index'])->name('outlets');
Route::get('/kontak',      [ContactController::class, 'index'])->name('contact');

Route::get('/kemitraan',   [PartnershipController::class, 'index'])->name('partnership');
Route::post('/kemitraan',  [PartnershipController::class, 'store'])->name('partnership.store');

Route::post('/kontak',     [ContactController::class, 'store'])->name('contact.store');