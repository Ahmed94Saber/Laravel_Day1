<?php

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

Route::get('/Books', function () {
    $books = [
        [
            "title" => "Java",
            "price" => 250
        ],
        [
            "title" => "Laravel",
            "price" => 150
        ],
        [
            "title" => "Php",
            "price" => 200
        ]
    ];
    $page = "Books";
    return view('Books',['books' => $books,'page' => $page]);
});
Route::get('/dashboard',function(){
    return view('dashboard');
});
Route::get('/create-book',function(){
    $page = "Create Book";
    return view('create-book',['page' => $page]);
});