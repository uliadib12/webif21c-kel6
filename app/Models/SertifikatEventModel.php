<?php

namespace App\Models;

use CodeIgniter\Model;

class SertifikatEventModel extends Model
{    
    protected $table = 'sertifikat_event';
    protected $primaryKey = 'id_sertifikat_event';
    protected $allowedFields = ['id_event', 'id_user_sertifikat'];

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
        'id_user_sertifikat' => 'required|numeric'
    ];
    protected $validationMessages   = [
        'id_event' => [
            'required' => 'Event harus diisi.',
            'numeric' => 'Event harus berupa angka.'
        ],
        'id_user_sertifikat' => [
            'required' => 'User sertifikat harus diisi.',
            'numeric' => 'User sertifikat harus berupa angka.'
        ]
    ];
    protected $skipValidation       = false;
}
