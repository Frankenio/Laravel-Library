<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Mostrar todos los libros
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Mostrar formulario para crear un libro
    public function create()
    {
        return view('books.create');
    }

    // Almacenar un nuevo libro
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index');
    }

    // Mostrar formulario para editar un libro
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Actualizar un libro
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn,' . $book->id,
        ]);

        $book->update($request->all());

        return redirect()->route('books.index');
    }

    // Eliminar un libro
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
