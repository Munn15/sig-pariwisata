<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\StrukturOrganisasiModel;

class StrukturOrganisasi extends BaseController
{
    public function __construct()
    {
        $session = session();
        // cek status login
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }
    }
    public function index()
    {
        $strukturOrganisasiModel = new StrukturOrganisasiModel();
        $strukturOrganisasi = $strukturOrganisasiModel->first();

        $data['title'] = 'Struktur Organisasi';
        $data['current_page'] = 'strukturorganisasi';
        $data['content'] = $strukturOrganisasi ? $strukturOrganisasi['content'] : '';

        return view('admin/strukturorganisasi', $data);
    }

    public function saveStrukturOrganisasi()
    {
        $content = $this->request->getPost('content');

        // Memeriksa apakah konten valid (tidak kosong dan tidak hanya <p><br></p>)
        if (is_string($content) && !empty(trim($content)) && $content !== '<p><br></p>') {
            $strukturOrganisasi = new StrukturOrganisasiModel();

            // Hapus konten sebelumnya jika ada
            $strukturOrganisasi->truncate();

            // Simpan konten terbaru ke database
            $strukturOrganisasi->save([
                'content' => $content
            ]);

            return redirect()->to('/strukturorganisasi')->with('message', 'Struktur Organisasi berhasil disimpan.')->with('alert-class', 'alert-success');
        } else {
            return redirect()->to('/strukturorganisasi')->with('message', 'Gagal menyimpan Struktur Organisasi. Konten kosong.')->with('alert-class', 'alert-danger');
        }
    }

    public function uploadImage()
    {
        // Mengambil file gambar 
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            // Memindahkan gambar ke direktori public/uploads/strukturorganisasi dengan nama acak
            $image->move(ROOTPATH . 'public/uploads/strukturorganisasi', $newName);

            // URL gambar yang diupload
            $imageUrl = base_url('uploads/strukturorganisasi/' . $newName);
            $response = [
                'success' => true,
                'message' => 'Gambar berhasil diupload.',
                'url' => $imageUrl
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Gagal mengunggah gambar.'
            ];
        }

        return $this->response->setJSON($response);
    }
}
