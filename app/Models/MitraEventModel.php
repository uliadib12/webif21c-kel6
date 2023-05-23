<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraEventModel extends Model
{
    protected $table = 'mitra_event';
    protected $primaryKey = 'id_mitra_event';
    protected $allowedFields = ['id_event', 'id_user_mitra'];

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
        'id_user_mitra' => 'required|numeric'
    ];
    protected $validationMessages   = [
        'id_event' => [
            'required' => 'Event harus diisi.',
            'numeric' => 'Event harus berupa angka.'
        ],
        'id_user_mitra' => [
            'required' => 'User mitra harus diisi.',
            'numeric' => 'User mitra harus berupa angka.'
        ]
    ];
    protected $skipValidation       = false;
}
