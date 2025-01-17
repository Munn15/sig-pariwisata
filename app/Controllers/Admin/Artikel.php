<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelModel;

class Artikel extends BaseController
{
    protected $artikelModel;

    public function __construct()
    {
        $session = session();
        // cek status login
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }

        $this->artikelModel = new ArtikelModel();
        helper('text');
    }

    public function index()
    {
        $data['title'] = 'Artikel';
        $data['current_page'] = 'artikel';
        $data['artikel'] = $this->artikelModel->getArtikelOrderedByDate();
        return view('admin/artikel', $data);
    }

    public function tambahartikel()
    {
        $data['title'] = 'Tambah Artikel';
        $data['current_page'] = 'tambahartikel';
        return view('admin/tambahartikel', $data);
    }

    public function save()
    {
        // Ambil gambar yang diunggah
        $foto = $this->request->getFile('foto');

        // Validasi ukuran dan ekstensi file
        if (!$foto->isValid() || $foto->getSize() > 10485760 || !in_array($foto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
            session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');

            session()->setFlashdata('input_data', $this->request->getPost());

            return redirect()->back()->withInput();
        }

        // Generate nama unik untuk file gambar
        $namaFoto = $foto->getRandomName();

        // Pindahkan file gambar ke folder yang ditentukan
        $foto->move('uploads/artikel', $namaFoto);

        // Data untuk disimpan ke database
        $data = [
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
            'foto' => $namaFoto,
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        // Simpan data ke database
        $this->artikelModel->insert($data);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Artikel berhasil ditambahkan.');

        // Redirect ke halaman artikel setelah berhasil disimpan
        return redirect()->to('/artikel');
    }

    public function editartikel($id_artikel)
    {
        $data['title'] = 'Edit Artikel';
        $data['current_page'] = 'editartikel';
        $data['artikel'] = $this->artikelModel->find($id_artikel);
        return view('admin/editartikel', $data);
    }

    public function update($id_artikel)
    {
        // Ambil gambar yang diunggah
        $foto = $this->request->getFile('foto');

        // Jika ada gambar yang diunggah, proses penggantian gambar
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Validasi ukuran dan ekstensi file
            if ($foto->getSize() > 10485760 || !in_array($foto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');

                session()->setFlashdata('input_data', $this->request->getPost());

                return redirect()->back()->withInput();
            }

            // Hapus gambar lama jika ada
            $artikel = $this->artikelModel->find($id_artikel);
            $oldFoto = $artikel['foto'];
            if ($oldFoto && file_exists('uploads/artikel/' . $oldFoto)) {
                unlink('uploads/artikel/' . $oldFoto);
            }

            // Generate nama unik untuk file gambar baru
            $namaFoto = $foto->getRandomName();

            // Pindahkan file gambar baru ke folder yang ditentukan
            $foto->move('uploads/artikel', $namaFoto);

            // Data untuk update ke database
            $data = [
                'judul' => $this->request->getPost('judul'),
                'tanggal' => $this->request->getPost('tanggal'),
                'foto' => $namaFoto,
                'deskripsi' => $this->request->getPost('deskripsi')
            ];
        } else {
            // Jika tidak ada gambar yang diunggah, gunakan data lama
            $data = [
                'judul' => $this->request->getPost('judul'),
                'tanggal' => $this->request->getPost('tanggal'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ];
        }

        // Update data ke database
        $this->artikelModel->update($id_artikel, $data);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Artikel berhasil diubah.');

        // Redirect ke halaman artikel setelah berhasil diupdate
        return redirect()->to('/artikel');
    }

    public function delete($id_artikel)
    {
        // Hapus gambar terkait sebelum menghapus data dari database
        $artikel = $this->artikelModel->find($id_artikel);
        $foto = $artikel['foto'];
        if ($foto && file_exists('uploads/artikel/' . $foto)) {
            unlink('uploads/artikel/' . $foto);
        }

        // Hapus data dari database
        $this->artikelModel->delete($id_artikel);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Artikel berhasil dihapus.');

        // Redirect ke halaman artikel setelah berhasil dihapus
        return redirect()->to('/artikel');
    }

    public function uploadImage()
    {
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke folder yang ditentukan
            $image->move('uploads/artikel', $imageName);

            // Kembalikan URL dari gambar yang diunggah
            return $this->response->setJSON(['success' => true, 'url' => base_url('uploads/artikel/' . $imageName)]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Upload failed']);
        }
    }
}
