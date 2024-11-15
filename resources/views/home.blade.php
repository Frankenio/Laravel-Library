{{-- <x-app-navbar>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">Biblioteca Sistemas e Informatica <small>Inicio</small></h1>
        </div>
    </div>
    <section class="full-reset text-center" style="padding: 40px 0;">
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
            <div class="tile-name all-tittles">administradores</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
            <div class="tile-name all-tittles">estudiantes</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
            <div class="tile-name all-tittles">docentes</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">personal administrativo</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-truck"></i></div>
            <div class="tile-name all-tittles">proveedores</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
            <div class="tile-name all-tittles">libros</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
            <div class="tile-name all-tittles">categorías</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
            <div class="tile-name all-tittles">secciones</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-timer"></i></div>
            <div class="tile-name all-tittles">reservaciones</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">devoluciones pendientes</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
            <div class="tile-name all-tittles">préstamos</div>
            <div class="tile-num full-reset">0</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
            <div class="tile-num full-reset">&nbsp;</div>
        </article>
    </section>
</x-app-navbar> --}}

<x-app-layout :title="'Home'">

    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">Biblioteca Sistemas e Informatica <small>Inicio</small></h1>
        </div>
    </div>
    <section class="full-reset text-center" style="padding: 40px 0;">
        @if (Auth::user()->role == 'administrador')
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">administradores</div>
                <div class="tile-num full-reset">{{ $users }}</div>
            </article>
        @endif

        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
            <div class="tile-name all-tittles">estudiantes</div>
            <div class="tile-num full-reset">{{ $studens }}</div>
        </article>
        
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
            <div class="tile-name all-tittles">docentes</div>
            <div class="tile-num full-reset">{{ $teachers }}</div>
        </article>

        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-male-female"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">lectores externos</div>
            <div class="tile-num full-reset">{{ $externals }}</div>
        </article>
{{--         <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-truck"></i></div>
            <div class="tile-name all-tittles">proveedores</div>
            <div class="tile-num full-reset">0</div>
        </article> --}}
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
            <div class="tile-name all-tittles">libros</div>
            <div class="tile-num full-reset">{{ $books }}</div>
        </article>

        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
            <div class="tile-name all-tittles">categorías</div>
            <div class="tile-num full-reset">{{ $categories }}</div>
        </article>
{{--         <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
            <div class="tile-name all-tittles">secciones</div>
            <div class="tile-num full-reset">0</div>
        </article> --}}
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-timer"></i></div>
            <div class="tile-name all-tittles">reservaciones</div>
            <div class="tile-num full-reset">0</div>
        </article>

        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">devoluciones pendientes</div>
            <div class="tile-num full-reset">0</div>
        </article>

        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
            <div class="tile-name all-tittles">préstamos</div>
            <div class="tile-num full-reset">0</div>
        </article>
        @if (Auth::user()->role == 'administrador')
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">reportes y estadísticas</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
        @endif
    </section>
    
</x-app-layout>
