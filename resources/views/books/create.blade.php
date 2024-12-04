<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-gray-700 mb-6">Agregar Nuevo Libro</h1>

        <!-- Formulario de agregar libro -->
        <div class="bg-white p-6 rounded-xl shadow-sm mb-6" x-data="bookCatalogApp()">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Formulario de Libro</h2>

            <!-- Formulario de POST -->
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" @submit.prevent="submitForm">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Código Local -->
                    <div>
                        <label for="code_local" class="block text-sm font-medium text-gray-600">Código Local</label>
                        <input type="text" id="code_local" name="code_local" x-model="form.code_local" class="mt-2 w-full p-2 border rounded-lg" required>
                    </div>

                    <!-- Título del libro -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-600">Título del libro</label>
                        <input type="text" id="title" name="title" x-model="form.title" class="mt-2 w-full p-2 border rounded-lg" required>
                    </div>

                    <!-- Año de publicación -->
                    <div>
                        <label for="published_year" class="block text-sm font-medium text-gray-600">Año de publicación</label>
                        <input type="number" id="published_year" name="published_year" x-model="form.published_year" class="mt-2 w-full p-2 border rounded-lg" required>
                    </div>

                    <!-- ISBN -->
                    <div>
                        <label for="isbn" class="block text-sm font-medium text-gray-600">ISBN</label>
                        <input type="text" id="isbn" name="isbn" x-model="form.isbn" class="mt-2 w-full p-2 border rounded-lg">
                    </div>

                    <!-- Tipo de libro -->
                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-600">Tipo de libro</label>
                        <select id="type" name="type" x-model="form.type" class="mt-2 w-full p-2 border rounded-lg" required>
                            <option value="Libro">Libro</option>
                            <option value="Tesis">Tesis</option>
                            <option value="Proyecto">Proyecto</option>
                            <option value="Trabajo">Trabajo</option>
                        </select>
                    </div>

                    <!-- Número de estantería -->
                    <div>
                        <label for="shelf_number" class="block text-sm font-medium text-gray-600">Número de Estantería</label>
                        <input type="number" id="shelf_number" name="shelf_number" x-model="form.shelf_number" class="mt-2 w-full p-2 border rounded-lg">
                    </div>

                    <!-- Estado del libro -->
                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-600">Estado</label>
                        <select id="status" name="status" x-model="form.status" class="mt-2 w-full p-2 border rounded-lg" required>
                            <option value="Disponible">Disponible</option>
                            <option value="Prestado">Prestado</option>
                            <option value="Reservado">Reservado</option>
                        </select>
                    </div>

                    <!-- Editorial -->
                    <div>
                        <label for="publisher" class="block text-sm font-medium text-gray-600">Editorial</label>
                        <input type="text" id="publisher" name="publisher" x-model="form.publisher" class="mt-2 w-full p-2 border rounded-lg">
                    </div>

                    <!-- Idioma -->
                    <div>
                        <label for="language" class="block text-sm font-medium text-gray-600">Idioma</label>
                        <input type="text" id="language" name="language" x-model="form.language" class="mt-2 w-full p-2 border rounded-lg">
                    </div>

                    <!-- Páginas -->
                    <div>
                        <label for="pages" class="block text-sm font-medium text-gray-600">Número de páginas</label>
                        <input type="number" id="pages" name="pages" x-model="form.pages" class="mt-2 w-full p-2 border rounded-lg">
                    </div>

                    <!-- Nivel académico -->
                    <div>
                        <label for="academic_level" class="block text-sm font-medium text-gray-600">Nivel académico</label>
                        <select id="academic_level" name="academic_level" x-model="form.academic_level" class="mt-2 w-full p-2 border rounded-lg">
                            <option value="Introducción">Introducción</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </div>

                    <!-- Proveedor -->
                    <div>
                        <label for="supplier" class="block text-sm font-medium text-gray-600">Proveedor</label>
                        <select id="supplier" name="supplier" x-model="form.supplier" class="mt-2 w-full p-2 border rounded-lg" required>
                            <option value="Donación">Donación</option>
                            <option value="Compra">Compra</option>
                            <option value="Entidad">Entidad</option>
                        </select>
                    </div>

                    <!-- Descripción -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-600">Descripción</label>
                        <textarea id="description" name="description" x-model="form.description" class="mt-2 w-full p-2 border rounded-lg" rows="3"></textarea>
                    </div>

                    <!-- Imagen -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-600">Imagen</label>

                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" x-model="form.image" />
                            </label>
                        </div>
                    </div>

                    <!-- Autores -->
                    <div>
                        <label for="authors" class="block text-sm font-medium text-gray-600">Autores</label>
                        <div class="flex items-center mt-2">
                            <button type="button" @click="toggleAuthorsModal" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Seleccionar Autores</button>
                            <button type="button" @click="toggleCreateAuthorModal" class="ml-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Nuevo Autor</button>
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
                            <button type="button" @click="toggleCreateCategoryModal" class="ml-2 px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Nueva Categoría</button>
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
                    <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Guardar Libro</button>
                </div>
            </form>
        </div>

        <!-- Ventanas emergentes para seleccionar autores y categorías (código previamente agregado) -->
        @include('books.modals.authors')
        @include('books.modals.categories')
        @include('books.modals.create_author')
        @include('books.modals.create_category')
    </div>

    <script>
        function bookCatalogApp() {
            return {
                form: {
                    code_local: '',
                    title: '',
                    published_year: '',
                    isbn: '',
                    type: 'Libro',
                    status: 'Disponible',
                    authors: [],
                    categories: [],
                    image: null,
                },
                // Lista de autores y categorías
                authorsList: @json($authors),  // Esta variable debería contener todos los autores pasados desde el controlador
                selectedAuthors: [],  // Esta variable guarda los IDs de los autores seleccionados

                // Control de apertura/cierre de modales
                isAuthorsModalOpen: false,
                categoriesList: @json(App\Models\Categorie::all()),

                toggleAuthorsModal() {
                    this.isAuthorsModalOpen = !this.isAuthorsModalOpen;
                },

                // Función para seleccionar los autores
                selectAuthors() {
                    this.form.authors = this.selectedAuthors;
                    this.toggleAuthorsModal();
                },  // Cierra el modal

                toggleCategoriesModal() {
                    this.isCategoriesModalOpen = !this.isCategoriesModalOpen;
                },

                toggleCreateAuthorModal() {
                    this.isCreateAuthorModalOpen = !this.isCreateAuthorModalOpen;
                },

                toggleCreateCategoryModal() {
                    this.isCreateCategoryModalOpen = !this.isCreateCategoryModalOpen;
                },

                submitForm() {
                    this.$refs.form.submit();
                }
            }
        }
    </script>

</x-app-layout>
