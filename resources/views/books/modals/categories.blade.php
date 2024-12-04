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
