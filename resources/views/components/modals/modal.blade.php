<!-- resources/views/components/modals/modal.blade.php -->
<div x-data="{ open: false }" x-show="open" x-transition @click.away="open = false" class="fixed inset-0 flex items-center justify-center z-50 overflow-y-auto">
    <div class="fixed inset-0 bg-black opacity-50"></div>
    <div class="bg-white rounded-lg w-11/12 sm:w-1/3 p-6 relative">
        <button @click="open = false" class="absolute top-0 right-0 p-2 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <div class="modal-header mb-4">
            <h3 class="text-xl font-semibold text-gray-900">{{ $title ?? 'Modal Title' }}</h3>
        </div>

        <div class="modal-body mb-4">
            {{ $slot }}
        </div>

        <div class="modal-footer flex justify-end">
            <button @click="open = false" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Cancelar</button>
            <button @click="open = false" class="bg-blue-600 text-white px-4 py-2 rounded-md">Aceptar</button>
        </div>
    </div>
</div>
