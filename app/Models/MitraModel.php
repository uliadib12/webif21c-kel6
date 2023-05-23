<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{
    protected $table = 'mitra';
    protected $primaryKey = 'id_mitra';
    protected $allowedFields = ['logo', 'nama', 'no_telp', 'email'];

    
    // Dates
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules    = [
        'nama' => 'required',
        'no_telp' => 'required|numeric',
        'email' => 'required|valid_email'
    ];
    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi.'
        ],
        'no_telp' => [
            'required' => 'Nomor telepon harus diisi.',
            'numeric' => 'Nomor telepon harus berupa angka.'
        ],
        'email' => [
            'required' => 'Email harus diisi.',
            'valid_email' => 'Email tidak valid.'
        ]
    ];
    protected $skipValidation = false;
}
