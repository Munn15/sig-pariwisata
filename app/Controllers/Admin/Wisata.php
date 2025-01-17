<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;

    public function __construct()
    {
        $session = session();
        // cek status login
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }

        $this->wisataModel = new WisataModel();
    }

    public function index()
    {
        $data['title'] = 'Wisata';
        $data['current_page'] = 'wisata';
        $data['wisata'] = $this->wisataModel->findAll();
        return view('admin/wisata', $data);
    }

    public function tambahwisata()
    {
        $data['title'] = 'Tambah Wisata';
        $data['current_page'] = 'tambahwisata';
        return view('admin/tambahwisata', $data);
    }

    public function save()
    {
        // Ambil gambar yang diunggah
        $foto = $this->request->getFile('gambar');

        // Validasi ukuran dan ekstensi file
        if (!$foto->isValid() || $foto->getSize() > 10485760 || !in_array($foto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
            session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');

            // Simpan data input ke dalam sesi agar tidak hilang saat redirect
            session()->setFlashdata('input_data', $this->request->getPost());

            return redirect()->back()->withInput();
        }

        // Generate nama unik untuk file gambar
        $namaFoto = $foto->getRandomName();

        // Pindahkan file gambar ke folder yang ditentukan
        $foto->move('uploads/wisata', $namaFoto);

        // Data untuk disimpan ke database
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'gambar' => $namaFoto,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude')
        ];

        // Simpan data ke database
        $this->wisataModel->insert($data);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Data wisata berhasil ditambahkan.');

        // Redirect ke halaman wisata setelah berhasil disimpan
        return redirect()->to('/wisata');
    }

    public function editwisata($id_wisata)
    {
        $data['title'] = 'Edit Wisata';
        $data['current_page'] = 'editwisata';
        $data['wisata'] = $this->wisataModel->find($id_wisata);
        return view('admin/editwisata', $data);
    }

    public function update($id_wisata)
    {
        // Ambil gambar yang diunggah
        $foto = $this->request->getFile('gambar');

        // Jika ada gambar yang diunggah, proses penggantian gambar
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Validasi ukuran dan ekstensi file
            if ($foto->getSize() > 10485760 || !in_array($foto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');

                // Simpan data input ke dalam sesi agar tidak hilang saat redirect
                session()->setFlashdata('input_data', $this->request->getPost());

                return redirect()->back()->withInput();
            }

            // Hapus gambar lama jika ada
            $wisata = $this->wisataModel->find($id_wisata);
            $oldFoto = $wisata['gambar'];
            if ($oldFoto && file_exists('uploads/wisata/' . $oldFoto)) {
                unlink('uploads/wisata/' . $oldFoto);
            }

            // Generate nama unik untuk file gambar baru
            $namaFoto = $foto->getRandomName();

            // Pindahkan file gambar baru ke folder yang ditentukan
            $foto->move('uploads/wisata', $namaFoto);

            // Data untuk update ke database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'gambar' => $namaFoto,
                'deskripsi' => $this->request->getPost('deskripsi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude')
            ];
        } else {
            // Jika tidak ada gambar yang diunggah, gunakan data lama
            $data = [
                'nama' => $this->request->getPost('nama'),
                'alamat' => $this->request->getPost('alamat'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude')
            ];
        }

        // Update data ke database
        $this->wisataModel->update($id_wisata, $data);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Data wisata berhasil diubah.');

        // Redirect ke halaman wisata setelah berhasil diupdate
        return redirect()->to('/wisata');
    }

    public function delete($id_wisata)
    {
        // Hapus gambar terkait sebelum menghapus data dari database
        $wisata = $this->wisataModel->find($id_wisata);
        $foto = $wisata['gambar'];
        if ($foto && file_exists('uploads/wisata/' . $foto)) {
            unlink('uploads/wisata/' . $foto);
        }

        // Hapus data dari database
        $this->wisataModel->delete($id_wisata);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'Data wisata berhasil dihapus.');

        // Redirect ke halaman wisata setelah berhasil dihapus
        return redirect()->to('/wisata');
    }

    public function uploadImage()
    {
        $image = $this->request->getFile('image');

        // Validasi ukuran dan ekstensi file
        if (!$image->isValid() || $image->getSize() > 10485760 || !in_array($image->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.'
            ]);
        }

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'uploads/wisata', $newName);

            // URL gambar yang diupload
            $imageUrl = base_url('uploads/wisata/' . $newName);
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
