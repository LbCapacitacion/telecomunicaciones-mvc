<?php
namespace Model;

class Proveedor extends ActiveRecord
{
    protected static $tabla = 'proveedor';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'empresa', 'razon_social', 'no_cuenta','telefono'];

    public $id; //campos de clase o propiedades
    public $nombre;
    public $apellido;
    public $email;
    public $empresa;
    public $razon_social;
    public $no_cuenta;
    public $telefono;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        
        $this->empresa = $args['empresa'] ?? '';
        $this->razon_social = $args['razon_social'] ?? '';
        $this->no_cuenta = $args['no_cuenta'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        
    }
    public function validar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'debes añadir un nombre';
        }
        if (!$this->apellido) {
            self::$alertas['error'][] = 'debes añadir los apellidos';
        }
        if (!$this->email) {
            self::$alertas['error'][] = 'debes añadir un email';
        }
        
        if (!$this->empresa) {
            self::$alertas['error'][] = 'Añade un nombre de empresa';
        }
        if (!$this->razon_social) {
            self::$alertas['error'][] = 'Añade la razon social';
        }
        if (!$this->no_cuenta) {
            self::$alertas['error'][] = 'Añade el numero de cuenta del proveedor';
        }
        if (!$this->telefono) {
            self::$alertas['error'][] = 'Añade el telefono';
        }
        

        return self::$alertas;
   }
}
