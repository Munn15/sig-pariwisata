<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class VisiMisiModel extends Model
{
    protected $table = 'visimisi';
    protected $primaryKey = 'id_visimisi';
    protected $allowedFields = ['content'];

    public function truncate()
    {
        $this->db->table($this->table)->truncate();
    }

    public function getVisiMisi()
    {
        return $this->first();
    }
}
