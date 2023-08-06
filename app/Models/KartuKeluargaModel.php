<?php

namespace App\Models;

use CodeIgniter\Model;

class KartuKeluargaModel extends Model
{
    protected $table      = 'kartu_keluarga';
    protected $primaryKey = 'id_kk';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'no_kk', 
        'nama_kepala_kk',
        'jumlah_tanggungan'
    ];
   
}