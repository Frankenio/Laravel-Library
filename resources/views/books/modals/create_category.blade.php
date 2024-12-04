<div x-show="isCreateCategoryModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg w-96">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Nueva Categoría</h3>
        <form @submit.prevent="createCategory">
            <label for="category_name" class="block text-sm font-medium text-gray-600">Nombre de la Categoría</label>
            <input type="text" id="category_name" x-model="newCategoryName" class="mt-2 w-full p-2 border rounded-lg" required>

            <div class="mt-4 flex justify-end">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Agregar</button>
                <button type="button" @click="isCreateCategoryModalOpen = false" class="ml-2 px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Cerrar</button>

            </div>
        </form>
    </div>
</div>

<script>
    function bookCatalogApp() {
        return {
            // ... otras propiedades y funciones
            newCategoryName: '',
            createCategory() {
                // Crear la categoría con AJAX o mediante un request a Laravel
                axios.post('{{ route('categorias.store') }}', {
                    name: this.newCategoryName
                })
                .then(response => {
                    // Actualizar la lista de categorías en el formulario
                    this.categoriesList.push(response.data);
                    this.newCategoryName = '';  // Limpiar el campo de entrada
                    this.isCreateCategoryModalOpen = false;
                })
                .catch(error => {
                    console.error("Hubo un error al crear la categoría:", error);
                });
            }
        }
    }
</script>
