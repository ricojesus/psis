<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->get('/dashboard', function () {
    $user = auth()->user();
    
    if ($user->role === 'admin') {
        return redirect('/admin/dashboard');
    } elseif ($user->role === 'professional') {
        return redirect('/profissional/dashboard');
    } else {
        return redirect('/paciente/dashboard');
    }
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:patient'])
    ->prefix('paciente')
    ->group(function () {
        Route::get('/dashboard', fn () => view('patient.dashboard'));
    });

Route::middleware(['auth', 'role:professional'])
    ->prefix('profissional')
    ->group(function () {
        Route::get('/dashboard', fn () => view('professional.dashboard'));
    });

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', fn () => view('admin.dashboard'));
    });

