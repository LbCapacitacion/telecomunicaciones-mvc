<?php

namespace MVC;



class Router
{
    public function __construct() {}

    public $rutasGet = [];
    public $rutasPost = [];

    public function get($url, $fn)
    {
        $this->rutasGet[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->rutasPost[$url] = $fn;
    }

    //mostrar una vista
    public function render($view, $datos = [])
    {
        foreach ($datos as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();

        include __DIR__ . "/views/layout.php";
    }
    public function comprobarRutas()
    {

        // Proteger Rutas...
        session_start();

        // Arreglo de rutas protegidas...
        $rutas_protegidas = ['/admin', '/clientes', '/proveedores', '/productos','/crearC','/crearP','/crearPP'];

        $auth = $_SESSION['login'] ?? null;

        $currentUrl = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->rutasGet[$currentUrl] ?? null;
        } else {
            $fn = $this->rutasPost[$currentUrl] ?? null;
        }

        if(in_array($currentUrl, $rutas_protegidas) && !$auth){
                header('Location: /login');
        }
        if ($fn) {
            // Call user fn va a llamar una función cuando no sabemos cual sera
            call_user_func($fn, $this); // This es para pasar argumentos
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }
}
