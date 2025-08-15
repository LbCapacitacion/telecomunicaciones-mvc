<?php

function incluirTemplate(string $nombre)
{

    include __DIR__ . "/templates/{$nombre}.php";
}

function debuggear($variable)
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function muestraNotificacion($codigo)
{
    $mensaje = '';

    switch ($codigo) {
        case 1:
            $mensaje = 'Creado correctamente';
            break;
        case 2:
            $mensaje = 'Actualizado correctamente';
            break;
        case 3:
            $mensaje = 'Eliminado correctamente';
            break;
        case 4:
            $mensaje = 'Cuenta comprobada correctamente';
            break;
        default:
            $mensaje = false;
            break;
    }
    return $mensaje;
}
 function s($html) : string{
        $s = htmlspecialchars($html);
        return $s;
    }

