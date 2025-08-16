<?php
namespace Model;

class Pago extends ActiveRecord
{
    protected static $tabla = 'pago';
    protected static $columnasDB = ['id','fecha', 'id_cliente', 'id_proveedor', 'id_servicio'];

    public $id; //campos de clase o propiedades
    public $fecha;
   
    public $id_cliente;
    public $id_proveedor;
    public $id_servicio;


    public $cliente;
    public $vendedor;
    
    public $servicio;



    public function __construct($args = [])
    {
        date_default_timezone_set('America/Mexico_City');

        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? date('Y-m-d H:i:s');
        $this->id_cliente = $args['id_cliente'] ?? null;
        $this->id_proveedor = $args['id_proveedor'] ?? null;
     
        $this->id_servicio = $args['id_servicio'] ?? null;
        
        
    }

    public function validar()
    {
        if (!$this->id_cliente) {
            self::$alertas['error'][] = 'debes seleccionar un cliente';
        }
        if (!$this->id_proveedor) {
            self::$alertas['error'][] = 'debes seleccionar un vendedor';
        }
        if (!$this->id_servicio) {
            self::$alertas['error'][] = 'debes seleccionar un paquete';
        }

        return self::$alertas;
    }
    
}
