<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NodesController;
use App\Http\Controllers\AnalyticsController;
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

// Dashboard Route
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Nodes Management Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/nodes', [NodesController::class, 'index'])->name('nodes.index');
});

// Analytics Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
});

require __DIR__.'/auth.php';
