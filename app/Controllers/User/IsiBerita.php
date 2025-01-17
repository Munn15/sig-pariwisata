<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelModel;

class IsiBerita extends BaseController
{
    public function index($id_artikel)
    {
        $artikelModel = new ArtikelModel();
        $artikel = $artikelModel->find($id_artikel);

        if (!$artikel) {
            // Redirect atau tampilkan halaman 404 jika artikel tidak ditemukan
            return redirect()->to('/berita');
        }

        $data = [
            'title' => 'Detail Artikel',
            'activePage' => 'berita',
            'artikel' => $artikel
        ];

        return view('user/isiberita', $data);
    }
}
