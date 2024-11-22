<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Libro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded">
        <h1 class="text-3xl font-bold mb-6">Detalle del Libro</h1>

        <div class="flex flex-col md:flex-row items-start">
            <!-- Imagen del libro -->
            @if ($book->image)
                <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}"
                     class="w-48 h-64 object-cover rounded-md">
            @else
                <div class="w-48 h-64 bg-gray-300 flex items-center justify-center rounded-md">
                    <span class="text-gray-500">Sin Imagen</span>
                </div>
            @endif

            <!-- Información del libro -->
            <div class="ml-6">
                <h2 class="text-2xl font-bold">{{ $book->title }}</h2>
                <p class="text-sm text-gray-600 mt-2">Autor: {{ $book->author->name ?? 'Desconocido' }}</p>
                <p class="text-sm text-gray-600">Publicado en: {{ $book->published_year }}</p>
                <p class="text-sm text-gray-600">ISBN: {{ $book->isbn ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
</body>
</html>
