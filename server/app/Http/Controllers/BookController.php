<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return Book::orderBy('id', 'DESC')->get();
    }

    public function show($id) {
        $book = Book::find($id);
        return $book;
    }

    public function create(Request $request) {
        $book = new Book();
        $book->fill($request->all());
        $book->save();

        return $book;
    }

    public function update($id, Request $request) {
        $book = Book::find($id);
        $book->fill($request->all());
        $book->save();

        return $book;
    }

    public function delete($id) {
        $book = Book::find($id)->delete();
        return $book;
    }
}
