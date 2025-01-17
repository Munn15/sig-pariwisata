<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id_gallery';
    protected $allowedFields = ['foto', 'id_wisata'];

    public function getPhotosByWisata($id_wisata, $limit = 8)
    {
        return $this->where('id_wisata', $id_wisata)
            ->orderBy('id_gallery', 'DESC')
            ->findAll($limit);
    }
}
