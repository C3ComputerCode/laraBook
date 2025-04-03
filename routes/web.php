<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function () {
    Route::resource('books',BookController::class);
    Route::resource('bookcategories',BookCategoryController::class);

});


// Route::get('books', [App\Http\Controllers\BookController::class, 'search'])->name('books.search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\BookController::class, 'customer'])->name('customer.home');




