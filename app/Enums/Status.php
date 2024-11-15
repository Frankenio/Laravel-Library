<?php

namespace App\Enums;

enum Status: string
{
    case Disponible = 'disponible';
    case Prestado = 'prestado';
    case Reservado = 'reservado';
    case Activo = 'activo';
    case Devuelto = 'devuelto';
    case Pendiente = 'pendiente';
    case Expirada = 'expirada';
    case Aceptada = 'aceptada';
}