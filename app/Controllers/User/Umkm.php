<?php

namespace App\Controllers\User;

use App\Models\Admin\UmkmModel;
use App\Controllers\BaseController;

class Umkm extends BaseController
{
    public function index($id_umkm)
    {
        $umkmModel = new UmkmModel();
        $umkm = $umkmModel->find($id_umkm);

        if (!$umkm) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("UMKM dengan ID $id_umkm tidak ditemukan");
        }

        $data = [
            'title' => $umkm['nama'],
            'activePage' => 'umkm',
            'subPage' => $umkm['nama'],
            'umkm' => $umkm
        ];

        return view('user/umkm', $data);
    }
}
