<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_event',
        'kategori', 
        'pendaftaran', 
        'jamAwalPendaftaran', 
        'jamAkhirPendaftaran', 
        'penyisihan', 
        'jamAwalPenyisihan', 
        'jamAkhirPenyisihan', 
        'pengumuman', 
        'final'
    ];
}
