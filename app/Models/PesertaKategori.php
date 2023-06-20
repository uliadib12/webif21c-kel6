<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaKategoriModel extends Model
{
    protected $table = 'peserta_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'id_kategori'];
}