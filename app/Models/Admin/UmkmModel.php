<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class UmkmModel extends Model
{
    protected $table = 'umkm';
    protected $primaryKey = 'id_umkm';
    protected $allowedFields = ['nama', 'foto', 'deskripsi'];
}
