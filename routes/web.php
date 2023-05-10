<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ppidController;
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
Route::get('/formpengajuan',[ppidController::class, 'index']);
Route::get('/ppid/create',[ppidController::class, 'create']);
Route::post('/ppid/store',[ppidController::class, 'store']);
Route::get('/ppid/{id}/edit', [ppidController::class,'edit']);
Route::put('/ppid/{id}', [ppidController::class,'update']);
Route::delete('/ppid/{id}', [ppidController::class,'destroy']);
// Route::get('/ppid'[ppidController::class]);