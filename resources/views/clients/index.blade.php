<x-client-app-layout>
    <section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Invertimos en el potencial académico</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">En la Biblioteca de la Facultad de Ingeniería, nos enfocamos en proporcionar recursos educativos que fomenten el aprendizaje y la innovación tecnológica. Creemos que el acceso a información de calidad es clave para el éxito académico y profesional de nuestros estudiantes.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Comienza a explorar
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Descubre más
                </a>
            </div>
        </div>
    </section>


    <section class="px-8 pt-20 pb-10 bg-gray-100">
        <div class="container mx-auto mb-20 text-center">
            <h1 class="mb-2 text-4xl font-bold text-blue-gray-900">Libros Académicos</h1>
            <p class="mx-auto w-full px-4 text-gray-500 lg:w-9/12">
                En nuestra biblioteca, ofrecemos una amplia selección de guías de estudio,
                material para preparación de exámenes y libros de referencia. Ya sea que
                estés estudiando programación, redes, o cualquier otra disciplina de la
                carrera de Sistemas e Informática, tenemos los recursos que necesitas
                para tu formación académica.
            </p>

            <!-- ====== Filtros de Categorías ====== -->
            <div class="mt-20 flex items-center justify-center" x-data="{ selectedTab: 'Libros', books: @entangle('books') }">
                <!-- Versión móvil (select) -->
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Seleccionar categoría</label>
                    <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            x-model="selectedTab">
                        <option>Libros</option>
                        <option>Tesis</option>
                        <option>Proyectos</option>
                        <option>Trabajos</option>
                    </select>
                </div>

                <!-- Versión de escritorio (tabs) -->
                <ul class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow sm:flex dark:divide-gray-700 dark:text-gray-400">
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4" :class="{'text-gray-900 bg-gray-100': selectedTab === 'Libros', 'bg-white': selectedTab !== 'Libros'}"
                        x-on:click.prevent="selectedTab = 'Libros'">Libros</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4" :class="{'text-gray-900 bg-gray-100': selectedTab === 'Tesis', 'bg-white': selectedTab !== 'Tesis'}"
                        x-on:click.prevent="selectedTab = 'Tesis'">Tesis</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4" :class="{'text-gray-900 bg-gray-100': selectedTab === 'Proyectos', 'bg-white': selectedTab !== 'Proyectos'}"
                        x-on:click.prevent="selectedTab = 'Proyectos'">Proyectos</a>
                    </li>
                    <li class="w-full focus-within:z-10">
                        <a href="#" class="inline-block w-full p-4" :class="{'text-gray-900 bg-gray-100': selectedTab === 'Trabajos', 'bg-white': selectedTab !== 'Trabajos'}"
                        x-on:click.prevent="selectedTab = 'Trabajos'">Trabajos</a>
                    </li>
                </ul>
            </div>

        <!-- Listado de libros filtrado según la categoría seleccionada -->
        <div id="book-list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
            <!-- Card de Libro -->
            <template x-for="book in books.filter(b => b.category === selectedTab)" :key="book.id">
                <div class="relative rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group w-full h-80">
                    <img :src="'{{ asset('storage') }}' + '/' + book.image" :alt="book.title" class="w-full h-full object-cover object-center rounded-t-lg">
                    <div class="absolute inset-0 bg-white p-4 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-10 transition-all duration-500 flex flex-col justify-between h-full">
                        <h3 class="text-xl font-semibold text-slate-800 truncate" x-text="book.title"></h3>
                        <p class="text-sm text-slate-600 mt-1" x-text="book.author"></p>
                        <p class="text-sm text-slate-500 mt-2 line-clamp-3" x-text="book.description"></p>
                        <p class="text-sm font-medium mt-2 text-green-500">Disponible</p>
                        <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            Reservar
                        </button>
                    </div>
                </div>
            </template>
        </div>

        <div class="grid place-items-center">
          <button
            class="mt-32 px-4 py-2 border border-gray-900 text-gray-900 rounded hover:bg-gray-900 hover:text-white"
          >
            Show more
          </button>
        </div>
      </section>


<!-- ====== Main ====== -->
<main class="py-16 px-8 bg-gray-100">
    <div class="mx-auto max-w-7xl flex space-x-8">
        <!-- Contenedor principal con los libros -->
        <div class="flex-1">


            <!-- ====== Encabezado ====== -->
            <header class="bg-gradient-to-r from-blue-500 to-indigo-600 py-12 text-center text-white">
                <h1 class="text-4xl font-extrabold">Catálogo de Libros</h1>
                <p class="mt-2 text-lg">Explora, encuentra y reserva tus libros favoritos.</p>
            </header>
            <!-- ====== Fin del Encabezado ====== -->


            <!-- ====== Filtros de Categorías ====== -->
            <div x-data="{ category: '' }">
                <!-- Categoría Principal -->
                <div>
                    <label for="category" class="block text-lg font-semibold text-slate-800">Categorías</label>
                    <select id="category" x-model="category" name="category" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="libros">Libros</option>
                        <option value="tesis">Tesis</option>
                        <option value="proyectos">Proyectos</option>
                        <option value="trabajos">Trabajos</option>
                    </select>
                </div>

                <!-- Subcategorías (Solo visible si se selecciona 'Libros') -->
                <div x-show="category === 'libros'" class="mt-4">
                    <label for="subcategory" class="block text-lg font-semibold text-slate-800">Subcategorías de Libros</label>
                    <select id="subcategory" name="subcategory" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="programacion">Programación</option>
                        <option value="analisis-sistemas">Análisis de Sistemas</option>
                        <option value="ciencias-datos">Ciencias de Datos</option>
                    </select>
                </div>
            </div>



            <!-- Lista de libros -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Repetir este bloque para cada libro -->
                <!-- Card de Libro -->
                <div class="relative rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group w-full h-80">
                    <!-- Imagen del libro -->
                    <img src="images/clean.jpeg" alt="Libro" class="w-full h-full object-cover object-center rounded-t-lg">

                    <!-- Contenido de la card (oculto por defecto) -->
                    <div class="absolute inset-0 bg-white p-4 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-10 transition-all duration-500 flex flex-col justify-between h-full">
                        <!-- Título del libro -->
                        <h3 class="text-xl font-semibold text-slate-800 truncate">Título del Libro</h3>

                        <!-- Autor del libro -->
                        <p class="text-sm text-slate-600 mt-1">Autor del Libro</p>

                        <!-- Descripción corta -->
                        <p class="text-sm text-slate-500 mt-2 line-clamp-3">
                            Este es un texto de ejemplo para describir el libro. Aquí puedes colocar una breve descripción de lo que trata el libro.
                        </p>

                        <!-- Estado de disponibilidad -->
                        <p class="text-sm font-medium mt-2 text-green-500">Disponible</p>

                        <!-- Botón de Reserva -->
                        <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            Reservar
                        </button>
                    </div>
                </div>
                <!-- Card de Libro -->
                <div class="relative rounded-lg bg-white shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden group w-full h-80">
                    <img src="images/clean.jpeg" alt="Libro" class="w-full h-full object-cover object-center rounded-t-lg">
                    <div class="absolute inset-0 bg-white p-4 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-10 transition-all duration-500 flex flex-col justify-between h-full">
                        <h3 class="text-xl font-semibold text-slate-800 truncate">Título del Libro</h3>
                        <p class="text-sm text-slate-600 mt-1">Autor del Libro</p>
                        <p class="text-sm text-slate-500 mt-2 line-clamp-3">
                            Este es un texto de ejemplo para describir el libro. Aquí puedes colocar una breve descripción de lo que trata el libro.
                        </p>
                        <p class="text-sm font-medium mt-2 text-green-500">Disponible</p>
                        <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            Reservar
                        </button>
                    </div>
                </div>
                <!-- Fin de bloque -->
            </div>
        </div>

        <!-- ====== Aside con autenticación ====== -->
        <aside class="sticky top-0 max-w-xs bg-white p-8 shadow-lg h-screen">
            <h2 class="mb-4 text-2xl font-bold text-slate-800">Autenticación</h2>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700">Contraseña</label>
                    <input type="password" id="password" name="password" required
                        class="mt-1 w-full rounded-lg border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <button type="submit"
                    class="w-full rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Iniciar Sesión</button>
            </form>

            <p class="mt-4 text-center text-sm text-slate-600">
                ¿No tienes una cuenta?
                <a href="#" class="text-blue-500 hover:underline">Regístrate aquí</a>
            </p>
        </aside>
    </div>
</main>
<!-- ====== END Main ====== -->
</x-client-app-layout>
