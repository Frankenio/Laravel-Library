<?php

namespace App\Enums;

enum Role: string
{
    case Administrador = 'administrador';
    case Bibliotecario = 'bibliotecario';
    case Estudiante = 'estudiante';
    case Docente = 'docente';
}