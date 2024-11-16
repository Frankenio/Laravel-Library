<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca SIS-INF</title>

        <!-- favicon link -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else

        @endif

        <!-- Scripts  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <style type="text/tailwindcss">
            body{
                font-family: 'Inter', sans-serif;
            }
        </style>


    </head>
    <body class="relative" x-data="{ open: false }">


        <!-- ====== header ====== -->


        <header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
            <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
                <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
                    <!-- logo -->
                    <div class="w-[15rem] max-w-full">
                        <a href="#">
                            <img src="{{ asset('images/LogoSisInf1.png') }}" alt="logo" class="w-full">
                        </a>
                    </div>

                    <!-- menu -->
                    <div class="flex w-full items-center justify-between">
                        <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-[90px] w-full max-w-[350px] rounded-lg border border-blue-200 bg-white py-5 px-6 shadow-lg shadow-blue-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                            <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                                <li>
                                    <a href="#" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Inicio</a>
                                </li>
                                <li>
                                    <a href="#manual" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Manual</a>
                                </li>
                                <li>
                                    <a href="#nosotros" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Sobre Nosotros</a>
                                </li>
                                <li>
                                    <a href="#" @click.prevent="open = true" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Catalogo</a>
                                </li>
                                <li>
                                    <a href="#contacto" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Contacto</a>
                                </li>
                            </ul>
                        </nav>




                    </div>
                    <!-- menu btn -->
                    <div class="flex">
                        <a href="{{ route('login') }}"  class="mr-10 hidden rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600 sm:block lg:mr-0">Login</a>

                        <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="block lg:hidden">
                            <ion-icon name="menu-outline" class="text-4xl text-blue-500"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!-- ====== END header ====== -->


        <!-- ====== hero ====== -->

        <section class="relative bg-white py-16 lg:pt-[100px]">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-5/12">
                        <h1 class="text-slate-800 mb-3 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px]">
                            Explora y Accede a los Mejores Recursos en <span class="text-blue-600">Sistemas e Informática</span>
                        </h1>
                        <p class="text-slate-500 mb-8 max-w-[480px] text-base">
                            Bienvenidos a la Biblioteca de la Facultad de Ingeniería, donde estudiantes de Sistemas e Informática pueden acceder a libros especializados, proyectos y más, diseñados para apoyar tus estudios y desarrollo profesional. Aquí encontrarás recursos actualizados y un sistema de préstamos fácil y rápido, pensado especialmente para tus necesidades académicas.
                        </p>
                        <button class="w-full rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto">
                            Explorar Catalogo
                        </button>


                        <!-- brand -->
                        <div class="mt-6 flex flex-wrap gap-4">
                            <img src="{{ asset('images/book.webp') }}" alt="brand" class="w-32 cursor-pointer rounded-lg border border-blue-300/20 bg-white px-5 py-3 shadow-md shadow-blue-500/5 duration-200 hover:scale-95 sm:w-36">
                            <img src="{{ asset('images/tesis.png') }}" alt="brand" class="w-32 cursor-pointer rounded-lg border border-blue-300/20 bg-white px-5 py-3 shadow-md shadow-blue-500/5 duration-200 hover:scale-95 sm:w-36">
                            <img src="{{ asset('images/gdc.svg') }}" alt="brand" class="w-32 cursor-pointer rounded-lg border border-blue-300/20 bg-white px-5 py-3 shadow-md shadow-blue-500/5 duration-200 hover:scale-95 sm:w-36">
                        </div>
                    </div>

                    <div class="hidden px-4 lg:block lg:w-1/12"></div>

                    <div class="w-full px-4 lg:w-6/12">
                        <div class="relative lg:ml-auto lg:text-right pt-11 lg:pt-0">
                            <!-- Superposición de ima1 y ima2 -->
                            <div class="relative w-full flex justify-center items-center">
                                <img src="{{ asset('images/SIS.png') }}" alt="Background Image" class="w-[42%] opacity-90 absolute top-0 left-0 z-10 transform rotate-[-15deg] scale-105">
                                <img src="{{ asset('images/INF.png') }}" alt="Foreground Image" class="w-[36%] relative z-20 transform rotate-[10deg] -translate-y-8 translate-x-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== END hero ====== -->

        <!-- Ventana emergente de autenticación para el catalogo -->
        <div x-show="open" x-transition.opacity.duration.300ms class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg relative mx-4" @click.away="open = false">
                <button @click="open = false" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">&times;</button>
            <h2 class="text-2xl font-semibold mb-4 text-center">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" id="email" class="mt-1 px-4 py-2 border rounded-md w-full" placeholder="nombre.apellido@sistemas.edu.bo" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" id="password" class="mt-1 px-4 py-2 border rounded-md w-full" placeholder="CI+SISinf" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" @click="open = false" class="px-4 py-2 mr-2 bg-gray-300 rounded-lg hover:bg-gray-400">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Ingresar</button>
                </div>
            </form>
        </div>

        <!-- ====== END manual ====== -->

    </div>

        <!-- ====== FAQ ====== -->

        <section id="manual" class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <!-- heading text -->
                <div class="mb-5 sm:mb-10">
                    <span class="font-medium text-blue-500">Our FAQ</span>
                    <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Frequently Asked Questions</h1>
                </div>
                    <!-- wrapper -->
                    <div class="md:flex md:justify-between md:gap-6">
                        <div class="mb-8 flex justify-center md:mb-0 md:w-5/12">
                            <img src="images/faq.png" alt="faq images" class="max-h-[500px] md:max-h-max">
                        </div>

                        <div class="md:w-6/12">
                            <div class="" x-data="{selected:1}">
                                <ul>
                                    <li class="relative mb-5">
                                        <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                                <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                            </div>
                                        </button>

                                        <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                            <div class="p-6">
                                                <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative mb-5">
                                        <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                                <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                            </div>
                                        </button>

                                        <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                            <div class="p-6">
                                                <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative mb-5">
                                        <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                                <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                            </div>
                                        </button>

                                        <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                            <div class="p-6">
                                                <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="relative mb-5">
                                        <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                                            <div class="flex items-center justify-between">
                                                <h4 class="font-medium text-slate-600">Lorem ipsum dolor sit, amet consectetur?</h4>
                                                <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                            </div>
                                        </button>

                                        <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                            <div class="p-6">
                                                <p class="text-slate-500">ipsum! Assumenda, dolorem nihil. Commodi, qui? Officiis provident, cumque perspiciatis magni commodi rem nihil,</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <!-- ====== END FAQ ====== -->

        <!-- ====== about ====== -->

        <section id="nosotros" class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <div class="md:flex md:justify-between md:gap-6">
                    <div class="md:w-6/12">
                        <!-- heading text -->
                        <div class="mb-5 sm:mb-10">
                            <span  class="font-medium text-blue-500">Sobre Nosotros</span>
                            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Biblioteca de Ingeniería en Sistemas e Informática</h1>
                        </div>
                        <p class="text-slate-500 mb-6">
                            Bienvenidos a la Biblioteca de la Facultad de Ingeniería, un espacio dedicado a apoyar a los estudiantes de Ingeniería en Sistemas e Informática en su desarrollo académico y profesional. Nuestro objetivo es ofrecer recursos especializados, accesibles y actualizados para el crecimiento de nuestra comunidad.
                        </p>
                        <ul>
                            <li class="mb-6 flex items-center">
                                <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                                    <ion-icon name="book-outline"></ion-icon>
                                </div>
                                <p class="ml-4 max-w-md font-medium text-slate-600">Acceso a una amplia colección de libros, proyectos, y tesis especializadas en Sistemas e Informática.</p>
                            </li>
                            <li class="mb-6 flex items-center">
                                <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                                    <ion-icon name="laptop-outline"></ion-icon>
                                </div>
                                <p class="ml-4 max-w-md font-medium text-slate-600">Soporte digital con bases de datos en línea y materiales de consulta para investigaciones avanzadas.</p>
                            </li>
                            <li class="mb-6 flex items-center">
                                <div class="flex h-[35px] w-[35px] min-w-[35px] items-center justify-center rounded-full bg-blue-500 text-white">
                                    <ion-icon name="people-outline"></ion-icon>
                                </div>
                                <p class="ml-4 max-w-md font-medium text-slate-600">Atención personalizada por parte de nuestro equipo para orientarte en la búsqueda y uso de los recursos.</p>
                            </li>
                        </ul>
                        <a href="https://portal2.sistemas.edu.bo" target="_blank" rel="noopener noreferrer">
                            <button class="w-full rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 md:w-max">Visita nuestra Web</button>
                        </a>

                    </div>

                    <!-- about img -->
                    <div class="mt-8 flex justify-center md:mt-0 md:w-5/12">
                        <img src="{{ asset('images/about.png') }}" alt="Imagen de la biblioteca" class="max-h-[500px] md:max-h-max">
                    </div>
                </div>
            </div>
        </section>


        <!-- ====== END about ====== -->



<!-- ====== Contact ====== -->
<section id="contacto" class="relative overflow-hidden py-16">
    <img src="images/effect.png" alt="effect" class="absolute bottom-[-400px] -z-10 w-full opacity-[0.2]">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="-mx-4 flex flex-wrap lg:justify-between">

            <!-- left info-->
            <div class="w-full px-4 md:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <span class="font-medium text-blue-500">Contactanos</span>
                    <h1 class="mb-3 text-2xl font-bold text-slate-700 sm:text-3xl">PONTE EN CONTACTO CON NOSOTROS</h1>
                    <p class="text-slate-500 mb-8">Si necesita ayuda, no dude en contactarnos a través de los detalles a continuación.</p>

                    <!-- address -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="location-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Nuestra Ubicación</h4>
                            <p class="text-base text-slate-400">Av. 6 de Octubre #2332, Edificio A, 2do Piso, La Paz, Bolivia</p>
                        </div>
                    </div>
                    <!-- phone -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="call-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Numero de Telefono</h4>
                            <p class="text-base text-slate-400">(+591) 2205500</p>
                        </div>
                    </div>
                    <!-- email -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="mail-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Direccion de Correo</h4>
                            <p class="text-base text-slate-400">contact@sistemas.edu.bo</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- right contact-->
            <div class="w-full px-4 md:w-1/2 xl:w-5/12">
                <div class="relative rounded-lg bg-white p-8 shadow-lg shadow-blue-500/10 sm:p-12">
                    <form action="">
                        <div class="mb-6">
                            <input type="text" placeholder="Your Name" class="w-full rounded-lg border border-blue-500/20 px-4 py-3 text-slate-500 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <input type="email" placeholder="Your Email" class="w-full rounded-lg border border-blue-500/20 px-4 py-3 text-slate-500 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <input type="password" placeholder="Your Password" class="w-full rounded-lg border border-blue-500/20 px-4 py-3 text-slate-500 focus:border-blue-500 focus:outline-none">
                        </div>
                        <div class="mb-6">
                            <textarea name="message" rows="6" class="resize-none w-full rounded-lg border border-blue-500/20 px-4 py-3 text-slate-500 focus:border-blue-500 focus:outline-none"></textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="w-full rounded border border-blue-300 bg-blue-500 p-3 text-white transition-all hover:bg-opacity-90">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ====== END Contact ====== -->
<!-- ====== Footer ====== -->
<footer class="bg-blue-900 text-white py-6">
    <div class="container mx-auto text-center">
        <div class="mb-4">
            <p class="text-lg font-medium">Universidad Tecnica de Oruro (UTO)</p>
            <p>&copy; 2024 Todos los derechos reservados.</p>
        </div>
        <div class="flex justify-center gap-6">
            <a href="https://www.facebook.com/upbbolivia" class="text-white hover:text-blue-500">
                <ion-icon name="logo-facebook" class="text-2xl"></ion-icon>
            </a>
            <a href="https://twitter.com/upbbolivia" class="text-white hover:text-blue-500">
                <ion-icon name="logo-twitter" class="text-2xl"></ion-icon>
            </a>
            <a href="https://www.instagram.com/upb_bolivia" class="text-white hover:text-blue-500">
                <ion-icon name="logo-instagram" class="text-2xl"></ion-icon>
            </a>
        </div>
    </div>
</footer>
<!-- ====== End Footer ====== -->




        </body>

</html>
