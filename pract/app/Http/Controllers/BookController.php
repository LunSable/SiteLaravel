<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Http\Requests\AuthorRequest;
use App\Books;
use App\Author;

class BookController extends Controller
{

    
    public function submit(BookRequest $req){
        
        $book=new Books;
        $authors=Author::all();
        $author=$req->idAuthor;
        $book->name_books=$req->input('book');
        $book->idAuthor=$req->input('idAuthor');
        $book->type_books=$req->input('type');
        $book->sum_books=$req->input('sum');
        $book->save();
        return view('add',['authors' => $authors]);
    }

    public function submit2(AuthorRequest $req){
        $authors=Author::all();
        $author=new Author;
        $author->name_author=$req->input('author_name');
        $author->save();
        return view('addAuthor',['authors' => $authors]);
    }

    public function AllData(){
        $authors=Author::all();
        return view('add',['authors' => $authors]);
    }

    public function AllDataAuthor(){
        $authors=Author::all();
        return view('addAuthor',['authors' => $authors]);
    }


    public function AllView(){
        $books=Books::all();
        $authors=Author::all();
        $books = Books::with('author')->get();
        
       // dd(Books::first()->author);
        return view('index',['books' => $books],['authors' => $authors]);
    }
    public function AllViewAuthor(){
        $books=Books::all();
        $authors=Author::all();
        $books = Books::with('author')->get();
        
       // dd(Books::first()->author);
        return view('author',['books' => $books],['authors' => $authors]);
    }
    public function AllViewAuthorAd(){
        $books=Books::all();
        $authors=Author::all();
        $books = Books::with('author')->get();
        
       // dd(Books::first()->author);
        return view('authorch',['books' => $books],['authors' => $authors]);
    }
    public function AllViewAd(){
        $books=Books::all();
        $authors=Author::all();
        $books = Books::with('author')->get();
       // dd(Books::first()->author);
        return view('change',['books' => $books]);
    }
    public function ChangeOne($id){
        $authors=Author::all();
        $book=new Books;
        return view('OneChange',['data'=>$book->find($id)],['authors' => $authors]);
    }
    public function ChangeOneAuthor($id){
        $authors=Author::all();
        $author=new Author;
        return view('OneChangeAuthor',['data'=>$author->find($id)],['authors' => $authors]);
    }
    public function Change($id,BookRequest $req){
        $books = Books::with('author')->get();
        $book=Books::find($id);
        $authors=Author::all();
        $author=$req->idAuthor;
        $book->name_books=$req->input('book');
        $book->idAuthor=$req->input('idAuthor');
        $book->type_books=$req->input('type');
        $book->sum_books=$req->input('sum');
        $book->save();
        return redirect()->route('book-change-refresh',['books' => $books]);
    }
    public function ChangeAuthor($id,AuthorRequest $req){
        $authors = Author::all();
        $author=Author::find($id);
        $author->name_author=$req->input('author_name');
        $author->save();
        return redirect()->route('author-change-refresh',['authors' => $authors]);
    }

    public function OneDelete($id){
        $authors = Author::all();
        $books = Books::with('author')->get();
        $book=Books::find($id)->delete();
        return redirect()->route('book-change-refresh',['authors' => $authors]);
    }
    public function OneDeleteAuthor($id){
        $authors = Author::all();
        $author=Author::find($id)->delete();
        return redirect()->route('author-change-refresh',['authors' => $authors]);
    }
}
