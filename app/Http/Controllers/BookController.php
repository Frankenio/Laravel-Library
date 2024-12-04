<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Categorie;
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
        // Obtener todos los autores disponibles
        $authors = Author::all();
        $categories = Categorie::all(); // Si tienes categorías para mostrar

        return view('books.create', compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'title' => 'required',
            'code_local' => 'required|unique:books',
            'authors' => 'required|array',
        ]);

        // Crear el libro
        $book = Book::create($request->only([
            'code_local', 'title', 'published_year', 'isbn', 'type', 'shelf_number',
            'status', 'publisher', 'language', 'pages', 'academic_level', 'supplier', 'description'
        ]));

        // Guardar autores seleccionados
        $book->authors()->attach($request->authors);

        // Redirigir a la página de libros o mostrar un mensaje de éxito
        return redirect()->route('books.index')->with('success', 'Libro agregado exitosamente.');
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
