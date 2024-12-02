<?php

namespace app\Models;

use CodeIgniter\Model;

class ProductoModel extends Model{
    protected $table      = 'producto';
    protected $primaryKey = 'id_producto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_producto','nombre_producto', 'descripcion_producto','categoria_producto', 'precio_producto', 'cantidad_producto', 'estado_producto', 'proveedor_producto', 'img_producto'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}