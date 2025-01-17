<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['judul', 'tanggal', 'foto', 'deskripsi'];

    public function getArtikelOrderedByDate()
    {
        return $this->orderBy('tanggal', 'DESC')->findAll();
    }

    public function getLatestArticles($limit = 5)
    {
        return $this->orderBy('tanggal', 'DESC')->findAll($limit);
    }

    public function getArticlesWithPagination($limit, $offset)
    {
        return $this->orderBy('tanggal', 'DESC')->findAll($limit, $offset);
    }

    public function getTotalArticles()
    {
        return $this->countAllResults();
    }
}
