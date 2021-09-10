<?php

namespace App\Models;

use CodeIgniter\Model;

class BhaskaraModel extends Model
{
    protected $table      = 'dados';
    protected $primaryKey = 'ID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; 
    protected $useSoftDeletes = false;

    protected $allowedFields = ['A', 'B', 'C', 'DELTA','X1','X2'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}