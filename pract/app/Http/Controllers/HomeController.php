<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Author;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books=Books::all();
        $authors=Author::all();
        $books = Books::with('author')->get();
        
       // dd(Books::first()->author);
        return view('index',['books' => $books],['authors' => $authors]);
    }
}
