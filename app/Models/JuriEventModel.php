<?php

namespace App\Models;

use CodeIgniter\Model;

class JuriEventModel extends Model
{
    protected $table = 'juri_event';
    protected $primaryKey = 'id_juri_event';
    protected $allowedFields = ['id_event', 'id_user_juri'];
    
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
        'id_user_juri' => 'required|numeric'
    ];
    protected $validationMessages   = [
        'id_event' => [
            'required' => 'Event harus diisi.',
            'numeric' => 'Event harus berupa angka.'
        ],
        'id_user_juri' => [
            'required' => 'User juri harus diisi.',
            'numeric' => 'User juri harus berupa angka.'
        ]
    ];
    protected $skipValidation       = false;
}
