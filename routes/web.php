<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::view('/', 'pages.home')->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/createItem', [MenuController::class, 'create'])->name('createItem');
Route::post('/menus', [MenuController::class, 'store']);

require __DIR__.'/auth.php';