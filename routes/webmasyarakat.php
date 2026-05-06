<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MasyarakatController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('masyarakat', MasyarakatController::class);

Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');

Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('home');
Route::get('/create', [MasyarakatController::class, 'create']);
Route::post('/masyarakat', [MasyarakatController::class, 'store']);
Route::get('/masyarakat/{id}/edit', [MasyarakatController::class, 'edit'])
    ->name('masyarakat.edit');
Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update']);
Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy'])
    ->name('masyarakat.destroy');
Route::get('/masyarakat/{id}/edit', [MasyarakatController::class, 'edit']);
Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update']);