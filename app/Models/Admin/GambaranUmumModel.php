<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class GambaranUmumModel extends Model
{
    protected $table = 'gambaranumum';
    protected $primaryKey = 'id_gambaranumum';
    protected $allowedFields = ['content'];

    public function truncate()
    {
        $this->db->table($this->table)->truncate();
    }

    public function getGambaranUmum()
    {
        return $this->first();
    }
}
