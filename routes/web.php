<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ppidController;
use App\Http\Controllers\beritaController;
use Illuminate\Support\Facades\Password;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
    ? back()->with(['status' => __($status)])
    : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::get('/formpengajuan', function ()
{
    return view('formpengajuan');
});
Route::get('/berita', function ()
{
    return view('berita');
});
Route::get('/formpengajuan',[ppidController::class, 'index']);
Route::get('formpengajuan/create',[ppidController::class, 'create']);
Route::post('/ppid/store',[ppidController::class, 'store']);
Route::get('/ppid/{id}/edit', [ppidController::class,'edit']);
Route::put('/ppid/{id}', [ppidController::class,'update'])->name('ppid.update');
Route::delete('/formpengajuan/{id}', [ppidController::class,'destroy'])->name('ppid.destroy');
Route::get('/formpengajuan/search', [ppidController::class,'search']);
Route::get('/formpengajuan/filter', [ppidController::class,'filter']);
Route::get('/downloadpdf', [ppidController::class,'downloadpdf']);

Route::get('/berita', [beritaController::class, 'index']);
Route::get('/berita/create', [BeritaController::class, 'create'])->name('berita.create');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('/berita/{berita}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('berita.update');
Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('berita.destroy');