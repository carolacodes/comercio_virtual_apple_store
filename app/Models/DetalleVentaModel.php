<?php

namespace app\Models;

use CodeIgniter\Model;

class DetalleVentaModel extends Model{
    protected $table      = 'detalle_venta';
    

    protected $useAutoIncrement = false;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_venta','id_producto', 'detalle_cantidad','detalle_precio'];

    protected bool $allowEmptyInserts = true;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    
}