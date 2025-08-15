<?php
namespace Model;

class Servicio extends ActiveRecord
{
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id','mbps', 'precio'];

    public $id; //campos de clase o propiedades
    public $mbps;
    public $precio;
    

 


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->mbps = $args['mbps'] ?? '';
        $this->precio = $args['precio'] ?? '';
       
       
        
        
    }
     public function validar()
    {
        if (!$this->mbps) {
            self::$alertas['error'][] = 'debes añadir la velocidad del paquete';
        }
        if (!$this->precio) {
            self::$alertas['error'][] = 'debes añadir un costo';
        }
    }
    
}
