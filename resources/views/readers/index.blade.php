<x-app-layout>
    <div class="container">
        <div class="page-header">
          <h1 class="all-tittles">Sistema bibliotecario <small>Administración Usuarios</small></h1>
        </div>
    </div>
    @include('readers.extensions.header')
    <div class="container-fluid"  style="margin: 50px 0;">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <img src="assets/img/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                Bienvenido a la sección donde se encuentra el listado de estudiantes de la institución, podrás buscar los estudiantes por sección o nombre. Puedes actualizar o eliminar los datos del estudiante.<br>
                <strong class="text-danger"><i class="zmdi zmdi-alert-triangle"></i> &nbsp; ¡Importante! </strong>Si eliminas el estudiante del sistema se borrarán todos los datos relacionados con él, incluyendo préstamos y registros en la bitácora.
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="breadcrumb">
                    <li><a href="student.html">Nuevo estudiante</a></li>
                    <li class="active">Listado de estudiantes</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin: 0 0 50px 0;">
        <form class="pull-right" style="width: 30% !important;" autocomplete="off">
            <div class="group-material">
                <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar estudiante" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                    <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <h2 class="text-center all-tittles">listado de estudiantes</h2>

        <div class="table-responsive">
            <div class="div-table" style="margin:0 auto; !important; width: 100%;"> <!-- Centrado y sin márgenes adicionales -->
                <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold; text-align:center;">
                    <div class="div-table-cell" style="width: 3%; padding: 5px 10px;">#</div>
                    <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">CI</div>
                    <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">Apellidos</div>
                    <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">Nombres</div>
                    <div class="div-table-cell" style="width: 18%; padding: 5px 10px;">Correo electrónico</div>
                    <div class="div-table-cell" style="width: 9%; padding: 5px 10px;">Teléfono</div>
                    <div class="div-table-cell" style="width: 20%; padding: 5px 10px;">Dirección</div>
                    <div class="div-table-cell" style="width: 9%; padding: 5px 10px;">Acciones</div>
                </div>
            </div>

            <!-- Iterar sobre la variable 'students' correctamente -->
            @foreach($students as $student)
            <div class="div-table-row" style="text-align:center;">
                <div class="div-table-cell" style="width: 3%; padding: 5px 10px;">{{ $loop->iteration }}</div>
                <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">{{ $student->code }}</div>
                <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">{{ $student->last_name }}</div>
                <div class="div-table-cell" style="width: 10%; padding: 5px 10px;">{{ $student->first_name }}</div>
                <div class="div-table-cell" style="width: 18%; padding: 5px 10px;">{{ $student->email }}</div>
                <div class="div-table-cell" style="width: 9%; padding: 5px 10px;">{{ $student->phone }}</div>
                <div class="div-table-cell" style="width: 20%; padding: 5px 10px;">{{ $student->address }}</div>
                <div class="div-table-cell" style="width: 9%; padding: 5px 10px;">
                    <!-- Botones de acciones: Editar, Eliminar -->
                    <button class="btn btn-success"><i class="zmdi zmdi-refresh"></i></button>
                    <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</x-app-layout>
