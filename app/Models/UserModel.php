<?php

namespace app\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; //object
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_usuario','nombre_usuario', 'apellido_usuario', 'email_usuario', 'pass_usuario', 'dni_usuario', 'direccion_usuario', 'telefono_usuario', 'perfil_usuario', 'estado_usuario'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}