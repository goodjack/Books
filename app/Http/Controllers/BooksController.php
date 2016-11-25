<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BooksController extends Controller
{
    public function show()
    {
    	return view('books.show');
    }

    public function create()
    {
    	return view('books.create');
    }
}
