<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBooksRequest;
use App\Models\Book;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->cannot("viewAny", Book::class)) {
            abort(403);
        }
        $books = Book::all();
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBooksRequest $request)
    {
        if ($request->user()->cannot("create", Book::class)) {
            abort(403);
        }
        $book = new Book($request->all());
        $book->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Book $book)
    {
        if ($request->user()->cannot("view", Book::class)) {
            abort(403);
        }
        return $book;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        if ($request->user()->cannot("view", Book::class)) {
            abort(403);
        }
        return [
            ""
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
