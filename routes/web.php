<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;

Route::view('/', 'pages.home')->name('home');

// Route::get('/menu', [MenuController::class, 'index'])->name('menu');
// Route::get('/createItem', [MenuController::class, 'create'])->name('createItem')->middleware('auth');
// Route::post('/menus', [MenuController::class, 'store']);
// Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit')->middleware('auth');
// Route::put('/menus/{id}', [MenuController::class, 'update'])->name('menus.update');
// Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');


Route::resource('/menus', MenuController::class)
    ->middlewareFor('create', 'auth')
    ->middlewareFor('edit', 'auth');


// Route::get('/contact', [ContactController::class, 'create'])->name('contact');
// Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/reviews', [ContactController::class, 'index'])->name('review')->middleware('auth');
Route::resource('/reviews', ContactController::class)
    ->middlewareFor('index', 'auth');


require __DIR__.'/auth.php';