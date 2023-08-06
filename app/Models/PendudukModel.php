<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table      = 'penduduk';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = [
        'is_kepala_keluarga',
        'nik', 
        'id_kk', 
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'penghasilan',
        'pengeluaran',
        'sumber_air',
        'status_kawin',
        'status_rumah',
        'daya_listrik',
        'transportasi'
    ];
   
}