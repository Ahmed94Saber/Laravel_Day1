<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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
Route::get('',function(){
    return view('welcome');
});
Route::middleware(['auth', 'check-age'])->group(function () {
    Route::resource('books', BookController::class,);
});
// Route::resource('books', BookController::class,);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
