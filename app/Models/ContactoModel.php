<?php

namespace app\Models;

use CodeIgniter\Model;

class ContactoModel extends Model{
    protected $table      = 'contacto';
    protected $primaryKey = 'id_contacto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_contacto','nombre_contacto', 'email_contacto','asunto_contacto', 'mensaje_contacto'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}