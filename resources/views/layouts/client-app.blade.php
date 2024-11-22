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
        <link rel="stylesheet" href="{{ asset('css/catalogue.css') }}">
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

        <!-- ====== Main ====== -->
        <main>

        </main>
        <!-- ====== END Main ====== -->
            {{ $slot }}
        <!-- ====== Aside ====== -->
        <aside>

        </aside>
        <!-- ====== END Aside ====== -->

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
