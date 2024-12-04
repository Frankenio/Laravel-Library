<!DOCTYPE html>
<html lang="en" x-data="bookCatalogApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Libros - Biblioteca</title>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold text-gray-700 mb-6">Catálogo de Libros</h1>

    <!-- Formulario para agregar o editar libro -->
    <div class="bg-white p-6 rounded-xl shadow-sm mb-6">
      <h2 class="text-2xl font-semibold text-gray-800 mb-4" x-text="isEditing ? 'Editar Libro' : 'Agregar Libro'"></h2>
      <form @submit.prevent="submitForm">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <!-- Código Local -->
          <div>
            <label for="code_local" class="block text-sm font-medium text-gray-600">Código Local</label>
            <input type="text" id="code_local" x-model="form.code_local" class="mt-2 w-full p-2 border rounded-lg" required>
          </div>

          <!-- Título del libro -->
          <div>
            <label for="title" class="block text-sm font-medium text-gray-600">Título del libro</label>
            <input type="text" id="title" x-model="form.title" class="mt-2 w-full p-2 border rounded-lg" required>
          </div>

          <!-- Año de publicación -->
          <div>
            <label for="published_year" class="block text-sm font-medium text-gray-600">Año de publicación</label>
            <input type="number" id="published_year" x-model="form.published_year" class="mt-2 w-full p-2 border rounded-lg" required>
          </div>

          <!-- ISBN -->
          <div>
            <label for="isbn" class="block text-sm font-medium text-gray-600">ISBN</label>
            <input type="text" id="isbn" x-model="form.isbn" class="mt-2 w-full p-2 border rounded-lg">
          </div>

          <!-- Tipo de libro -->
          <div>
            <label for="type" class="block text-sm font-medium text-gray-600">Tipo de libro</label>
            <select id="type" x-model="form.type" class="mt-2 w-full p-2 border rounded-lg" required>
              <option value="Libro">Libro</option>
              <option value="Tesis">Tesis</option>
              <option value="Proyecto">Proyecto</option>
              <option value="Trabajo">Trabajo</option>
            </select>
          </div>

          <!-- Número de estantería -->
          <div>
            <label for="shelf_number" class="block text-sm font-medium text-gray-600">Número de Estantería</label>
            <input type="number" id="shelf_number" x-model="form.shelf_number" class="mt-2 w-full p-2 border rounded-lg">
          </div>

          <!-- Estado del libro -->
          <div>
            <label for="status" class="block text-sm font-medium text-gray-600">Estado</label>
            <select id="status" x-model="form.status" class="mt-2 w-full p-2 border rounded-lg" required>
              <option value="Disponible">Disponible</option>
              <option value="Prestado">Prestado</option>
              <option value="Reservado">Reservado</option>
            </select>
          </div>

          <!-- Editorial -->
          <div>
            <label for="publisher" class="block text-sm font-medium text-gray-600">Editorial</label>
            <input type="text" id="publisher" x-model="form.publisher" class="mt-2 w-full p-2 border rounded-lg">
          </div>

          <!-- Idioma -->
          <div>
            <label for="language" class="block text-sm font-medium text-gray-600">Idioma</label>
            <input type="text" id="language" x-model="form.language" class="mt-2 w-full p-2 border rounded-lg">
          </div>

          <!-- Páginas -->
          <div>
            <label for="pages" class="block text-sm font-medium text-gray-600">Número de páginas</label>
            <input type="number" id="pages" x-model="form.pages" class="mt-2 w-full p-2 border rounded-lg">
          </div>

          <!-- Nivel académico -->
          <div>
            <label for="academic_level" class="block text-sm font-medium text-gray-600">Nivel académico</label>
            <select id="academic_level" x-model="form.academic_level" class="mt-2 w-full p-2 border rounded-lg">
              <option value="Introducción">Introducción</option>
              <option value="Intermedio">Intermedio</option>
              <option value="Avanzado">Avanzado</option>
            </select>
          </div>

          <!-- Proveedor -->
          <div>
            <label for="supplier" class="block text-sm font-medium text-gray-600">Proveedor</label>
            <select id="supplier" x-model="form.supplier" class="mt-2 w-full p-2 border rounded-lg" required>
              <option value="Donación">Donación</option>
              <option value="Compra">Compra</option>
              <option value="Entidad">Entidad</option>
            </select>
          </div>

          <!-- Descripción -->
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600">Descripción</label>
            <textarea id="description" x-model="form.description" class="mt-2 w-full p-2 border rounded-lg" rows="3"></textarea>
          </div>

          <!-- Imagen -->
          <div>
            <label for="image" class="block text-sm font-medium text-gray-600">Imagen</label>
            <input type="file" id="image" x-model="form.image" class="mt-2 w-full p-2 border rounded-lg" accept="image/*">
          </div>

          <!-- Autores -->
          <div>
            <label for="authors" class="block text-sm font-medium text-gray-600">Autores</label>
            <div class="flex items-center mt-2">
              <button type="button" @click="toggleAuthorsModal" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Seleccionar Autores</button>
              <button type="button" @click="toggleAddAuthorModal" class="ml-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Nuevo Autor</button>
            </div>
            <div class="mt-2 text-sm text-gray-600">
              <ul>
                <template x-for="author in form.authors" :key="author.id">
                  <li x-text="author.name"></li>
                </template>
              </ul>
            </div>
          </div>

          <!-- Categorías -->
          <div>
            <label for="categories" class="block text-sm font-medium text-gray-600">Categorías</label>
            <div class="flex items-center mt-2">
              <button type="button" @click="toggleCategoriesModal" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Seleccionar Categorías</button>
              <button type="button" @click="toggleAddCategoryModal" class="ml-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Nueva Categoría</button>
            </div>
            <div class="mt-2 text-sm text-gray-600">
              <ul>
                <template x-for="category in form.categories" :key="category.id">
                  <li x-text="category.name"></li>
                </template>
              </ul>
            </div>
          </div>

        </div>

        <div class="mt-4 flex justify-end">
          <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            <span x-text="isEditing ? 'Guardar Cambios' : 'Agregar Libro'"></span>
          </button>
        </div>
      </form>
    </div>

    <!-- Ventana emergente para seleccionar autores -->
    <div x-show="isAuthorsModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Seleccionar Autores</h3>
        <ul>
          <template x-for="author in authorsList" :key="author.id">
            <li>
              <label class="flex items-center">
                <input type="checkbox" x-model="form.authors" :value="author" class="mr-2">
                <span x-text="author.name"></span>
              </label>
            </li>
          </template>
        </ul>
        <div class="mt-4 flex justify-end">
          <button @click="isAuthorsModalOpen = false" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>
        </div>
      </div>
    </div>

    <!-- Ventana emergente para agregar nuevo autor -->
    <div x-show="isAddAuthorModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Nuevo Autor</h3>
        <div class="mb-4">
          <label for="new_author" class="block text-sm font-medium text-gray-600">Nombre del Autor</label>
          <input type="text" id="new_author" x-model="newAuthor" class="mt-2 w-full p-2 border rounded-lg">
        </div>
        <div class="mt-4 flex justify-end">
          <button @click="addNewAuthor" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Agregar</button>
          <button @click="isAddAuthorModalOpen = false" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>
        </div>
      </div>
    </div>

    <!-- Ventana emergente para seleccionar categorías -->
    <div x-show="isCategoriesModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Seleccionar Categorías</h3>
        <ul>
          <template x-for="category in categoriesList" :key="category.id">
            <li>
              <label class="flex items-center">
                <input type="checkbox" x-model="form.categories" :value="category" class="mr-2">
                <span x-text="category.name"></span>
              </label>
            </li>
          </template>
        </ul>
        <div class="mt-4 flex justify-end">
          <button @click="isCategoriesModalOpen = false" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>
        </div>
      </div>
    </div>

    <!-- Ventana emergente para agregar nueva categoría -->
    <div x-show="isAddCategoryModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
      <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Nueva Categoría</h3>
        <div class="mb-4">
          <label for="new_category" class="block text-sm font-medium text-gray-600">Nombre de la Categoría</label>
          <input type="text" id="new_category" x-model="newCategory" class="mt-2 w-full p-2 border rounded-lg">
        </div>
        <div class="mt-4 flex justify-end">
          <button @click="addNewCategory" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Agregar</button>
          <button @click="isAddCategoryModalOpen = false" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>
        </div>
      </div>
    </div>

  </div>

  <script>
    function bookCatalogApp() {
      return {
        isEditing: false, // Cambiar a true si estamos editando
        form: {
          code_local: '',
          title: '',
          published_year: '',
          isbn: '',
          type: 'Libro',
          shelf_number: null,
          status: 'Disponible',
          publisher: '',
          language: '',
          pages: null,
          academic_level: 'Introducción',
          supplier: 'Donación',
          description: '',
          image: null,
          authors: [],
          categories: [],
        },
        authorsList: [
          { id: 1, name: 'Autor 1' },
          { id: 2, name: 'Autor 2' },
          { id: 3, name: 'Autor 3' },
        ],
        categoriesList: [
          { id: 1, name: 'Categoría 1' },
          { id: 2, name: 'Categoría 2' },
          { id: 3, name: 'Categoría 3' },
        ],
        newAuthor: '',
        newCategory: '',
        isAuthorsModalOpen: false,
        isCategoriesModalOpen: false,
        isAddAuthorModalOpen: false,
        isAddCategoryModalOpen: false,

        toggleAuthorsModal() {
          this.isAuthorsModalOpen = !this.isAuthorsModalOpen;
        },

        toggleCategoriesModal() {
          this.isCategoriesModalOpen = !this.isCategoriesModalOpen;
        },

        toggleAddAuthorModal() {
          this.isAddAuthorModalOpen = !this.isAddAuthorModalOpen;
        },

        toggleAddCategoryModal() {
          this.isAddCategoryModalOpen = !this.isAddCategoryModalOpen;
        },

        addNewAuthor() {
          if (this.newAuthor.trim()) {
            const newId = Date.now(); // Usamos el timestamp como ID
            this.form.authors.push({ id: newId, name: this.newAuthor.trim() });
            this.newAuthor = ''; // Limpiar el campo
            this.isAddAuthorModalOpen = false; // Cerrar el modal
          }
        },

        addNewCategory() {
          if (this.newCategory.trim()) {
            const newId = Date.now();
            this.form.categories.push({ id: newId, name: this.newCategory.trim() });
            this.newCategory = '';
            this.isAddCategoryModalOpen = false;
          }
        },

        submitForm() {
          console.log(this.form);
          // Aquí iría la lógica para enviar el formulario (usualmente una petición AJAX o un form.submit() si es un POST).
        },
      };
    }
  </script>

</body>
</html>
{{--
<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-700 mb-6">Catálogo de Libros</h1>

        <a href="{{ route('libros.create') }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 mb-4 inline-block">
            Agregar Nuevo Libro
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($libros as $libro)
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <h3 class="font-semibold text-xl">{{ $libro->title }}</h3>
                    <p class="mt-2 text-sm">Autor: {{ $libro->authors->pluck('name')->join(', ') }}</p>
                    <p class="mt-2 text-sm">Categorías: {{ $libr    o->categorias->pluck('name')->join(', ') }}</p>
                    <a href="{{ route('libros.show', $libro->id) }}" class="text-indigo-600 hover:text-indigo-800">Ver detalles</a>
                </div>
            @endforeach
        </div>
    </div>

</x-app-layout>
--}}
