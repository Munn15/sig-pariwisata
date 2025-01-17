<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitor_count';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ip_address', 'visit_time'];

    public function recordVisit($ipAddress)
    {
        $this->insert([
            'ip_address' => $ipAddress,
        ]);
    }

    public function getVisitorCount()
    {
        return $this->countAllResults();
    }
}
