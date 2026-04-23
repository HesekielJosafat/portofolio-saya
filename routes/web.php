<?php

use App\Http\Controllers\ProfileController;

// Panggil Controller yang baru saja Anda buat
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Route;

use App\Models\About;

/*
|--------------------------------------------------------------------------
| 1. AREA PUBLIK (Pengunjung Biasa)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    $about = About::first();
    return view('home', compact('about')); // Menampilkan desain template portofolio Anda
});


/*
|--------------------------------------------------------------------------
| 2. AREA ADMIN (Wajib Login)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Semua rute di dalam group ini akan dijaga oleh "Satpam" (Middleware Auth)
// Artinya: Hanya Anda yang sudah login yang bisa mengakses URL ini
Route::middleware('auth')->group(function () {
    
    // Rute bawaan Breeze (Untuk ganti password / email akun admin)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ========================================================
    // MANTRA RESOURCE (Untuk mengelola isi Portofolio)
    // 1 baris kode ini otomatis membuatkan 7 rute CRUD sekaligus!
    // ========================================================
    Route::resource('abouts', AboutController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('experiences', ExperienceController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('messages', MessageController::class);

});

require __DIR__.'/auth.php';