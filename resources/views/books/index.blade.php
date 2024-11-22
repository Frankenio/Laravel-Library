<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <!-- favicon link -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded">
        <h1 class="text-3xl font-bold mb-6">Lista de Libros</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($books as $book)
                <div class="bg-white p-4 border rounded-lg shadow-md">
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-48 object-cover rounded-md">
                    <h2 class="mt-4 text-xl font-semibold">{{ $book->title }}</h2>
                    <!-- Se puede agregar más información aquí si es necesario -->
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
