<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        $page = "Books";
        
        return view('Books', [
            "page" => $page,
            "books" => $books
        ]);
    }
    public function create()
    {
        $page = "create book";
        return view('create-book', ['page' => $page]);
    }
    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        return redirect()->route('books.index');
    }
    public function show($book){
        $book = Book::findOrFail($book);
        return view('book',['book' => $book]);
    }
    public function destroy($book){
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }
    public function edit($book){
        $book = Book::find($book);
        return view('book_update',['book' => $book]);
    }
    public function update($book,Request $request){
        $book = Book::find($book);
        $book -> title = $request -> title;
        $book -> price = $request -> price;
        $book -> description = $request -> description;
        $book -> save();
        return redirect()->route('books.index');
        
    }
}
