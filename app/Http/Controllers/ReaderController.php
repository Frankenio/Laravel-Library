<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    // Mostrar todos los lectores
    public function index()
    {
        $students = Reader::all();
        return view('readers.index', compact('students'));
    }

    // Mostrar formulario para crear un lector
    public function create()
    {
        return view('readers.create');
    }

    // Almacenar un nuevo lector
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|regex:/^[0-9]{10}$/',  // 10 dígitos
            'first_name' => 'required|string|max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/',
            'last_name' => 'required|string|max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/',
            'birth_date' => 'required|date',
            'nationality' => 'required|string|max:50',
            'email' => 'required|email|max:100',
            'phone' => 'required|regex:/^[0-9]+$/|max:15',
            'address' => 'required|string|max:255',
            'role' => 'required|string',
        ], [
            'first_name.regex' => 'El nombre solo puede contener letras y espacios.',
            'last_name.regex' => 'El apellido solo puede contener letras y espacios.',
            'phone.regex' => 'El número de teléfono solo puede contener números.',
        ]);


        Reader::create($validatedData);

        return redirect()->route('readers.create')->with('success', 'Lector registrado exitosamente.');
    }


    // Mostrar formulario para editar un lector
    public function edit(Reader $reader)
    {
        return view('readers.edit', compact('reader'));
    }

    // Actualizar un lector
    public function update(Request $request, Reader $reader)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:readers,email,' . $reader->id,
        ]);

        $reader->update($request->all());

        return redirect()->route('readers.index');
    }

    // Eliminar un lector
    public function destroy(Reader $reader)
    {
        $reader->delete();

        return redirect()->route('readers.index');
    }
}
