<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'profile';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_user',
        'nama_lengkap',
        'npm',
        'kelas',
        'jenis_kelamin',
        'fakultas',
        'jurusan',
        'alamat',
        'no_hp',
    ];

     // Dates
     protected $useTimestamps = true;
     protected $dateFormat    = 'datetime';
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';
}