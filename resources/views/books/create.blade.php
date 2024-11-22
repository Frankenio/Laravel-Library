<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Libro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded">
        <h1 class="text-2xl font-bold mb-6">Crear un Nuevo Libro</h1>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="mb-4">
                <ul class="list-disc list-inside text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Título:</label>
                <input type="text" id="title" name="title" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="author_id" class="block text-sm font-medium text-gray-700">Autor:</label>
                <select id="author_id" name="author_id" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Seleccionar autor</option>
                    <!-- Simulación de opciones -->
                    <option value="1">Autor Ejemplo 1</option>
                    <option value="2">Autor Ejemplo 2</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="published_year" class="block text-sm font-medium text-gray-700">Año de Publicación:</label>
                <input type="number" id="published_year" name="published_year" min="1000" max="9999" required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen:</label>
                <input type="file" id="image" name="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:border file:border-gray-300 file:rounded-md file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
            </div>

            <button type="submit"
                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow hover:bg-blue-600">
                Guardar
            </button>
        </form>
    </div>
</body>
</html>
