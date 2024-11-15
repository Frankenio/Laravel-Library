<x-app-layout>
    <div class="container">
        <div class="page-header">
            <h1 class="all-tittles">Sistema bibliotecario <small>Administración Usuarios</small></h1>
        </div>
    </div>

    @include('readers.extensions.header')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="breadcrumb">
              <li class="active">Nuevo estudiante</li>
              <li><a href="liststudent.html">Listado de estudiantes</a></li>
            </ol>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="title-flat-form title-flat-blue">Registrar un nuevo lector</div>
            <form action="{{ route('readers.store') }}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <legend>Datos del lector</legend>
                        <br><br>

                        <div class="form-group">
                            <label for="code">CI</label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="Escribe aquí la Cedula de Identificación" required maxlength="20">
                        </div>

                        <div class="form-group" x-data="{ firstName: '', lastName: '', errorMessage: '' }">
                            <label for="first_name">Nombres</label>
                            <input type="text"
                                   name="first_name"
                                   id="first_name"
                                   class="form-control"
                                   placeholder="Escribe aquí los nombres"
                                   required
                                   maxlength="50"
                                   pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"
                                   x-model="firstName"
                                   x-on:input="
                                        firstName = firstName.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/g, '');
                                        errorMessage = firstName.match(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/) ? 'Los nombres solo pueden contener letras y espacios.' : '';
                                   ">
                            <!-- Advertencia de error si hay caracteres no válidos -->
                            <div x-show="errorMessage" class="invalid-feedback d-block">
                                <i class="bi bi-exclamation-circle"></i> <span x-text="errorMessage"></span>
                            </div>
                        </div>

                        <div class="form-group" x-data="{ lastName: '' }">
                            <label for="last_name">Apellidos</label>
                            <input type="text"
                                   name="last_name"
                                   id="last_name"
                                   class="form-control"
                                   placeholder="Escribe aquí los apellidos"
                                   required
                                   maxlength="50"
                                   pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,50}"
                                   x-model="lastName"
                                   x-on:input="lastName = lastName.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/g, '')">
                        </div>

                        <div class="form-group">
                            <label for="birth_date">Fecha de nacimiento</label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nationality">Nacionalidad</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Escribe aquí la nacionalidad" required maxlength="50">
                        </div>

                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Escribe aquí el correo electrónico" required maxlength="100">
                        </div>

                        <div class="form-group" x-data="{ phone: '' }">
                            <label for="phone">Teléfono</label>
                            <input type="text"
                                   name="phone"
                                   id="phone"
                                   class="form-control"
                                   placeholder="Escribe aquí el número de teléfono"
                                   required
                                   maxlength="15"
                                   x-model="phone"
                                   x-on:input="phone = phone.replace(/[^0-9]/g, '')">
                        </div>


                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Escribe aquí la dirección" required maxlength="255">
                        </div>

                        <div class="form-group">
                            <label for="role">Rol</label>
                            <select name="role" id="role" class="form-control" required>
                                <option value="" disabled selected>Selecciona un rol</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="docente">Docente</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                        {{-- <button type="submit"class="btn btn-primary":disabled="!isFormValid">Registrar</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
