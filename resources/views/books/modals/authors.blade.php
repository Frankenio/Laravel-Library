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
{{-- <!-- Modal de Selección de Autores -->
<div x-show="isAuthorsModalOpen" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
        <h3 class="text-lg font-semibold text-gray-700">Seleccionar Autores</h3>

        <div class="mt-4">
            <ul>
                <!-- Lista de autores -->
                <template x-for="author in authorsList" :key="author.id">
                    <li class="flex items-center mb-2">
                        <input type="checkbox" :value="author.id" x-model="selectedAuthors" class="mr-2" />
                        <span x-text="author.name"></span>
                    </li>
                </template>
            </ul>
        </div>

        <div class="mt-4 flex justify-end">
            <button type="button" @click="selectAuthors" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Seleccionar</button>
            <button type="button" @click="toggleAuthorsModal" class="ml-2 px-4 py-2 bg-gray-300 rounded-lg">Cerrar</button>
        </div>
    </div>
</div>
 --}}
