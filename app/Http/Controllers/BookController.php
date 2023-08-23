<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        return view('search');
    }

    public function search(Request $request) {
        $searchingFor = $request ->input('searchKeyword');
        $searchResults = Book::where('title', 'LIKE', '%'. $searchingFor. '%')->get();

        return view('search', ['keyword' => $searchingFor, 'searchResults' => $searchResults]);

    }
}
