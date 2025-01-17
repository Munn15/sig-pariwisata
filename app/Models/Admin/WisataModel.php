<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $allowedFields = ['nama', 'alamat', 'gambar', 'deskripsi', 'latitude', 'longitude'];

    public function getWisataByName($nama)
    {
        return $this->where('nama', $nama)->first();
    }

    // public function getWisata()
    // {
    //     return $this->findAll();
    // }

    // public function getWisataById($id)
    // {
    //     return $this->find($id);
    // }
}
