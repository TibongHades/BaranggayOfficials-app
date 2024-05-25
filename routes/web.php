<?php

use App\Http\Controllers\BarangayOfficialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('barangay-officials', [BarangayOfficialController::class, 'index'])->name('barangay-officials.index');
    Route::get('barangay-officials/create', [BarangayOfficialController::class, 'create'])->name('barangay-officials.create');
    Route::post('barangay-officials', [BarangayOfficialController::class, 'store'])->name('barangay-officials.store');
    Route::get('barangay-officials/{barangay_official}', [BarangayOfficialController::class, 'show'])->name('barangay-officials.show');
    Route::get('barangay-officials/{barangay_official}/edit', [BarangayOfficialController::class, 'edit'])->name('barangay-officials.edit');
    Route::put('barangay-officials/{barangay_official}', [BarangayOfficialController::class, 'update'])->name('barangay-officials.update');
    Route::delete('barangay-officials/{barangay_official}', [BarangayOfficialController::class, 'destroy'])->name('barangay-officials.destroy');
    Route::get('/logs', [BarangayOfficialController::class, 'logs'])->name('barangay-officials.logs');
    Route::get('/reports', [BarangayOfficialController::class, 'reports'])->name('barangay-officials.reports');
    
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
