<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaEventModel extends Model
{
    protected $table = 'peserta_event';
    protected $primaryKey = 'id_peserta_event';
    protected $allowedFields = ['id_event', 'id_user_peserta'];
    
    // Dates
    protected $useTimestamps = true;
    protected $useSoftDeletes   = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'id_event' => 'required|numeric',
        'id_user_peserta' => 'required|numeric'
    ];
    protected $validationMessages   = [
        'id_event' => [
            'required' => 'Event harus diisi.',
            'numeric' => 'Event harus berupa angka.'
        ],
        'id_user_peserta' => [
            'required' => 'User peserta harus diisi.',
            'numeric' => 'User peserta harus berupa angka.'
        ]
    ];
    protected $skipValidation       = false;
}
