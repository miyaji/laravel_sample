<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book as Book;

class BookController extends Controller
{

    function __construct()
    {
    }

    public function index()
    {
        return Book::all();
    }
    
    public function add(Request $request)
    {
        $book = new Book;
        $book->name = $request->name;
        $book->url = $request->url;
        $book->torrent = $request->torrent;
        $book->language = $request->language;

        $book->save();

        return 'success!!';
    }
}
