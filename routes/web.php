<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdvantageController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecificationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Frontend (Public)
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/profil-perusahaan', [FrontendController::class, 'profil'])->name('profil');
Route::get('/produk-kami', [FrontendController::class, 'produk'])->name('produk');
Route::get('/galeri-foto', [FrontendController::class, 'galeri'])->name('galeri');
Route::get('/hubungi-kami', [FrontendController::class, 'contact'])->name('contact');


/*
|--------------------------------------------------------------------------
| Dashboard (Breeze Default)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Profile User (Breeze Default)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/home',[PageController::class,'home'])->name('pages.home');

    Route::post('/pages/update/{id}',[PageController::class,'update'])->name('pages.update');

    Route::get('/advantages', [AdvantageController::class, 'index'])->name('advantages.index');
    Route::post('/advantages/update', [AdvantageController::class, 'update'])->name('advantages.update');

    Route::get('/galleries',[GalleryController::class,'index'])->name('galleries.index');
    Route::get('/galleries/create',[GalleryController::class,'create'])->name('galleries.create');
    Route::post('/galleries',[GalleryController::class,'store'])->name('galleries.store');
    Route::delete('/galleries/{id}',[GalleryController::class,'destroy'])->name('galleries.destroy');

    Route::get('/specifications', [SpecificationController::class, 'index'])->name('specifications.index');
    Route::post('/specifications', [SpecificationController::class, 'store'])->name('specifications.store');
    Route::delete('/specifications/{id}', [SpecificationController::class, 'destroy'])->name('specifications.destroy');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about', [AboutController::class, 'update'])->name('about.update');

});


require __DIR__.'/auth.php';
