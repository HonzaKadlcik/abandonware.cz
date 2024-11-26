<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/hry', function () {
    return view('hry');
});
Route::get('/kontakt', function () {
    return view('kontakt');
});
Route::get('/novinky', function () {
    return view('novinky');
});
Route::get('/products', [ProductController::class, 'index'])->name ('products.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/map', [MapController::class, 'showMap']);


Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/items/search', [ItemController::class, 'search'])->name('items.search');




require __DIR__.'/auth.php';
