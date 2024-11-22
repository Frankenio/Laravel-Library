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
    // Mostrar un libro individual
    public function show($id)
    {
        $book = Book::with('author')->findOrFail($id);
        return view('books.show', compact('book'));
    }


    // Mostrar formulario para crear un libro
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
{


    // Guardar la imagen si se sube
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('books', 'public');
    }

    // Crear el libro con autor_id
    Book::create([
        'title' => $request->input('title'),
        'image' => $imagePath ?? null,  // Guardar la ruta de la imagen o null si no se sube
    ]);

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
