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
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
            </style>
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
                                    <a href="#" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Servicios</a>
                                </li>
                                <li>
                                    <a href="#" @click.prevent="open = true" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Catalogo</a>
                                </li>
                                <li>
                                    <a href="#nosotros" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Sobre Nosotros</a>
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

        <!-- Ventana emergente de autenticación -->
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
    </div>


        <!-- ====== about ====== -->

        <section class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <div class="md:flex md:justify-between md:gap-6">
                    <div class="md:w-6/12">
                        <!-- heading text -->
                        <div class="mb-5 sm:mb-10">
                            <span id="nosotros" class="font-medium text-blue-500">Sobre Nosotros</span>
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


        {{-- <!-- ====== service ====== -->
        <section class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <!-- heading text -->
                <div class="mb-10 text-center">
                    <span class="font-medium text-blue-500">Our Services</span>
                    <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Provide Awesome Services</h1>
                    <p class="mx-auto max-w-2 mt-2 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti sit dolor numquam non. Et.</p>
                </div>

                <!-- box wrapper -->
                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:gap-8">
                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500">
                        <ion-icon name="bar-chart-outline" class="text-[55px] text-blue-500 duration-200 group-hover:text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Crafted for Startups</h4>
                        <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>

                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 bg-blue-500">
                        <ion-icon name="extension-puzzle-outline" class="text-[55px] duration-200 text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold duration-200 text-white">Fully Customizable</h4>
                        <p class="text-center text-sm duration-200 text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>

                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500">
                        <ion-icon name="speedometer-outline" class="text-[55px] text-blue-500 duration-200 group-hover:text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Speed Optimized</h4>
                        <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>

                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500">
                        <ion-icon name="diamond-outline" class="text-[55px] text-blue-500 duration-200 group-hover:text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">High-quality Design</h4>
                        <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>

                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500">
                        <ion-icon name="file-tray-full-outline" class="text-[55px] text-blue-500 duration-200 group-hover:text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">All Essential Sections</h4>
                        <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>

                    <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500">
                        <ion-icon name="cloud-download-outline" class="text-[55px] text-blue-500 duration-200 group-hover:text-white"></ion-icon>
                        <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Regular Updates</h4>
                        <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe accusamus nihil veritatis ad. Odit, veritatis!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== END service ====== -->


        <!-- ====== FAQ ====== -->

        <section class="py-16">
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


        <!-- ====== Portfolio ====== -->

        <section class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <!-- heading text -->
                <div class="mb-10 text-center">
                    <span class="font-medium text-blue-500">Our Portfolio</span>
                    <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Our Recent Works</h1>
                    <p class="mx-auto max-w-2 mt-2 text-slate-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti sit dolor numquam non. Et.</p>
                </div>
                <!-- wrapper -->
                <div class="flex flex-col gap-5">
                    <!-- col-1 -->
                    <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                            <img src="images/portfolio/p-1.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                            <img src="images/portfolio/p-2.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                            <img src="images/portfolio/p-3.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <!-- end col-1 -->

                    <!-- col-2 -->
                    <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3">
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 md:col-span-2">
                            <img src="images/portfolio/p-4.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                            <img src="images/portfolio/p-5.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <!-- end col-2 -->

                    <!-- col-3 -->
                    <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-4">
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                            <img src="images/portfolio/p-6.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52">
                            <img src="images/portfolio/p-7.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                        <div class="group relative h-40 overflow-hidden rounded-lg lg:h-52 sm:col-span-2">
                            <img src="images/portfolio/p-8.png" alt="portfolio img" class="absolute h-full w-full object-cover duration-200 group-hover:scale-125">
                            <div class="absolute -bottom-60 flex w-full cursor-pointer items-center justify-between bg-gradient-to-t from-slate-800 px-3 pb-4 pt-10 duration-200 group-hover:-bottom-0">
                                <p class="text-sm font-semibold text-white">Type Your portfolio details <span class="text-xs text-slate-300 block">12 August 2025</span></p>
                                <ion-icon name="heart" class="rounded-full bg-white p-1.5 text-lg text-blue-500"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
            </div>
        </section>
        <!-- ====== END Portfolio ====== -->


        <!-- ====== Blog ====== -->

        <section class="py-16">
            <div class="mx-auto max-w-7xl px-8 md:px-6">
                <!-- heading text -->
                <div class="mb-5 sm:mb-10">
                    <span class="font-medium text-blue-500">Our Blog</span>
                    <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">From Our Latest Blog</h1>
                </div>
                <!-- wrapper -->
                <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
                    <!-- single-blog -->
                    <div class="w-full duration-200 hover:scale-95">
                        <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                            <img src="images/blog/blog-1.png" alt="blog img" class="w-full">
                        </div>
                        <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                            <div class="">
                                <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Services</a>
                                <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                            </div>
                            <hr class="my-4 border-slate-100">
                            <div class="flex">
                                <img src="images/blog/user-1.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                                <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- single-blog -->
                    <div class="w-full duration-200 hover:scale-95">
                        <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                            <img src="images/blog/blog-2.png" alt="blog img" class="w-full">
                        </div>
                        <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                            <div class="">
                                <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Services</a>
                                <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Design</a>
                                <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Dolore Placeat Ullam Architecto Deleniti Maxime Laborum</a>
                            </div>
                            <hr class="my-4 border-slate-100">
                            <div class="flex">
                                <img src="images/blog/user-2.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                                <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- single-blog -->
                    <div class="w-full duration-200 hover:scale-95">
                        <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                            <img src="images/blog/blog-3.png" alt="blog img" class="w-full">
                        </div>
                        <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-md shadow-blue-500/10">
                            <div class="">
                                <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Website</a>
                                <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit.</a>
                            </div>
                            <hr class="my-4 border-slate-100">
                            <div class="flex">
                                <img src="images/blog/user-3.png" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                                <p class="text-sm font-semibold capitalize text-slate-600">Zahidul Hossain <span class="block text-xs text-slate-400">web designer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== END Blog ====== -->
--}}
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
