<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Author;

class BooksApiController extends Controller
{
    public function index()
    {
        return response() -> json(Books::with('author:id,name_author')->get());
    }
 
    public function show(Books $book)
    {
        return response()->json($book, 200);
    }

    public function update($id,Request $req)
    {
        $book=Books::find($id);
        $book->name_books=$req->name_books;
        $book->idAuthor=$req->idAuthor;
        $book->type_books=$req->type_books;
        $book->sum_books=$req->sum_books;
        $book->save();

        return response()->json($book, 201);
    }



    public function delete(Books $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }
}
