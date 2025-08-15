<?php
namespace Model;

class Producto extends ActiveRecord
{
    protected static $tabla = 'productos';
    protected static $columnasDB = ['id','nombre', 'descripcion', 'stock', 'precio'];

    public $id; //campos de clase o propiedades
    public $nombre;
    public $descripcion;
    public $stock;
    public $precio;
 


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->stock = $args['stock'] ?? '';
        $this->precio = $args['precio'] ?? '';
        
        
    }

    public function validar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'debes añadir un nombre';
        }
        if (!$this->descripcion) {
            self::$alertas['error'][] = 'debes añadir una descripcion';
        }
        if (!$this->stock) {
            self::$alertas['error'][] = 'falta el stock';
        }
        if (!$this->precio) {
            self::$alertas['error'][] = 'añade el precio';
        }

        return self::$alertas;
    }
    
}
