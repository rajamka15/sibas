<?php

namespace App\Models;

use CodeIgniter\Model;

class PeriodeBansosModel extends Model
{
    protected $table      = 'periode_bansos';
    protected $primaryKey = 'id_periode';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'nama_periode', 
        'tgl_awal',
        'tgl_akhir',
        'kuota',
        'keterangan'
    ];
   
}