<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StrukturOrganisasiModel extends Model
{
    protected $table = 'strukturorganisasi';
    protected $primaryKey = 'id_strukturorganisasi';
    protected $allowedFields = ['content'];

    public function truncate()
    {
        $this->db->table($this->table)->truncate();
    }

    public function getStrukturOrganisasi()
    {
        return $this->first();
    }
}
