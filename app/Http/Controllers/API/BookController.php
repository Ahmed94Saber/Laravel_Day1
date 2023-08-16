<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json([
            "message" => "All Books",
            "status_code" => 200,
            "data" => BookResource::collection($books)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBookRequest $request)
    {
        $fileName = Book::uploadFile($request, $request->pic);
        $book = Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
            "cat_id" => $request->category,
            "pic" => $fileName
        ]);
        return response()->json([
            "message" => "Book Created",
            "status_code" => 201,
            "data" => $book
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return response()->json([
            "message" => "Book Find",
            "status_code" => 200,
            "data" => new BookResource($books)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $book = Book::findOrFail($id);
        $book->update([
            'price' => $request->price
        ]);
        return response()->json([
            "message" => "Book updated",
            "status_code" => 200,
            "data" => $book
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json([
            "message" => "Book Deleted",
            "status_code" => 200,
            "data" => []
        ]);
    }
}
