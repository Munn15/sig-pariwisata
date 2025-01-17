<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\VisiMisiModel;

class VisiMisi extends BaseController
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
        $visiMisiModel = new VisiMisiModel();
        $visiMisi = $visiMisiModel->first(); // Mengambil data dari tabel visimisi

        $data['title'] = 'Visi Misi';
        $data['current_page'] = 'visimisi';
        $data['content'] = $visiMisi ? $visiMisi['content'] : ''; // Mengambil konten dari database

        return view('admin/visimisi', $data);
    }

    public function saveVisiMisi()
    {
        $content = $this->request->getPost('content');

        // Memeriksa apakah konten valid (tidak kosong dan tidak hanya <p><br></p>)
        if (is_string($content) && !empty(trim($content)) && $content !== '<p><br></p>') {
            $visiMisiModel = new VisiMisiModel();

            // Hapus konten sebelumnya jika ada
            $visiMisiModel->truncate();

            // Simpan konten terbaru ke database
            $visiMisiModel->save([
                'content' => $content
            ]);

            return redirect()->to('/visimisi')->with('message', 'Visi Misi berhasil disimpan.')->with('alert-class', 'alert-success');
        } else {
            return redirect()->to('/visimisi')->with('message', 'Gagal menyimpan Visi Misi. Konten kosong.')->with('alert-class', 'alert-danger');
        }
    }

    public function uploadImage()
    {
        // Mengambil file gambar 
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            // Memindahkan gambar ke direktori public/uploads/visimisi dengan nama acak
            $image->move(ROOTPATH . 'public/uploads/visimisi', $newName);

            // URL gambar yang diupload
            $imageUrl = base_url('uploads/visimisi/' . $newName);
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
