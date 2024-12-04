<div x-show="isCreateAuthorModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Nuevo Autor</h3>
        <form @submit.prevent="createAuthor">
            <label for="author_name" class="block text-sm font-medium text-gray-600">Nombre del Autor</label>
            <input type="text" id="author_name" x-model="newAuthorName" class="mt-2 w-full p-2 border rounded-lg" required>

            <div class="mt-4 flex justify-end">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Agregar</button>
                <button type="button" @click="isCreateAuthorModalOpen = false" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>

            </div>
        </form>
    </div>
</div>

<script>
    function bookCatalogApp() {
        return {
            // ... otras propiedades y funciones
            newAuthorName: '',
            createAuthor() {
                // Crear el autor con AJAX o mediante un request a Laravel
                axios.post('{{ route('authors.store') }}', {
                    name: this.newAuthorName
                })
                .then(response => {
                    // Actualizar la lista de autores en el formulario
                    this.authorsList.push(response.data);
                    this.newAuthorName = '';  // Limpiar el campo de entrada
                    this.isCreateAuthorModalOpen = false;
                })
                .catch(error => {
                    console.error("Hubo un error al crear el autor:", error);
                });
            }
        }
    }
</script>
