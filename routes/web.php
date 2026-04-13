<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::view('/', 'pages.home')->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/createItem', [MenuController::class, 'create'])->name('createItem')->middleware('auth');
Route::post('/menus', [MenuController::class, 'store']);
Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');

require __DIR__.'/auth.php';