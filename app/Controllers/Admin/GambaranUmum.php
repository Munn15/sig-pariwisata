<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\GambaranUmumModel;

class GambaranUmum extends BaseController
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
        $gambaranUmumModel = new GambaranUmumModel();
        $gambaranUmum = $gambaranUmumModel->first();

        $data['title'] = 'Gambaran Umum';
        $data['current_page'] = 'gambaranumum';
        $data['content'] = $gambaranUmum ? $gambaranUmum['content'] : '';

        return view('admin/gambaranumum', $data);
    }

    public function saveGambaranUmum()
    {
        $content = $this->request->getPost('content');

        // Memeriksa apakah konten valid (tidak kosong dan tidak hanya <p><br></p>)
        if (is_string($content) && !empty(trim($content)) && $content !== '<p><br></p>') {
            $gambaranUmumModel = new GambaranUmumModel();

            // Hapus konten sebelumnya jika ada
            $gambaranUmumModel->truncate();

            // Simpan konten terbaru ke database
            $gambaranUmumModel->save([
                'content' => $content
            ]);

            return redirect()->to('/gambaranumum')->with('message', 'Gambaran Umum berhasil disimpan.')->with('alert-class', 'alert-success');
        } else {
            return redirect()->to('/gambaranumum')->with('message', 'Gagal menyimpan Gambaran Umum. Konten kosong.')->with('alert-class', 'alert-danger');
        }
    }

    public function uploadImage()
    {
        // Mengambil file gambar 
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            // Memindahkan gambar ke direktori public/uploads/gambaranumum dengan nama acak
            $image->move(ROOTPATH . 'public/uploads/gambaranumum', $newName);

            // URL gambar yang diupload
            $imageUrl = base_url('uploads/gambaranumum/' . $newName);
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
