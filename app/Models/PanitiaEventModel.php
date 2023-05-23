<?php

namespace App\Models;

use CodeIgniter\Model;

class PanitiaEventModel extends Model
{
    protected $table = 'panitia_event';
    protected $primaryKey = 'id_panitia_event';
    protected $allowedFields = ['id_event', 'id_user_panitia'];

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
        'id_user_panitia' => 'required|numeric'
    ];
    protected $validationMessages   = [
        'id_event' => [
            'required' => 'Event harus diisi.',
            'numeric' => 'Event harus berupa angka.'
        ],
        'id_user_panitia' => [
            'required' => 'User panitia harus diisi.',
            'numeric' => 'User panitia harus berupa angka.'
        ]
    ];
    protected $skipValidation = false;
}
