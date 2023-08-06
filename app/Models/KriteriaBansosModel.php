<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaBansosModel extends Model
{
    protected $table      = 'kriteria';
    protected $primaryKey = 'id_kriteria';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'id_periode', 
        'nama_kriteria'
    ];
   
}