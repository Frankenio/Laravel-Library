<!-- resources/views/components/modals/modal-edit.blade.php -->
<x-modals.modal>
    <x-slot:title>Editar libro</x-slot:title>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Autor</label>
            <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea id="description" name="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>{{ old('description', $book->description) }}</textarea>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md">Actualizar Libro</button>
        </div>
    </form>
</x-modals.modal>
