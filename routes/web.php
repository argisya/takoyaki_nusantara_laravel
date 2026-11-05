<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    HomeController,
    AboutController,
    MenuController,
    GalleryController,
    OutletsController,
    PartnershipController,
    ContactController,
};
use App\Http\Controllers\admin\DashboardController;

Route::get('/',            [HomeController::class, 'index'])->name('home');
Route::get('/tentang',     [AboutController::class, 'index'])->name('about');
Route::get('/menu',        [MenuController::class, 'index'])->name('menu');
Route::get('/galeri',      [GalleryController::class, 'index'])->name('gallery');
Route::get('/outlet',      [OutletsController::class, 'index'])->name('outlets');
Route::get('/kontak',      [ContactController::class, 'index'])->name('contact');

Route::get('/kemitraan',   [PartnershipController::class, 'index'])->name('partnership');
Route::post('/kemitraan',  [PartnershipController::class, 'store'])->name('partnership.store');

Route::post('/kontak',     [ContactController::class, 'store'])->name('contact.store');

// Route Guest (Halaman Login Admin)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route Proteksi Admin (Hanya Pengguna Terautentikasi)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});