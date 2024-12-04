<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function create()
    {
        $authors = Author::all();  // Obtén todos los autores
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $author = Author::create([
            'name' => $request->name
        ]);

        return response()->json($author, 201);
    }
}
