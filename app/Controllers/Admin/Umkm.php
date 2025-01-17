<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\UmkmModel;

class Umkm extends BaseController
{
    protected $umkmModel;

    public function __construct()
    {
        $session = session();
        // cek status login
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }

        $this->umkmModel = new UmkmModel();
        helper('text');
    }

    public function index()
    {
        $data = [
            'title' => 'Data UMKM',
            'current_page' => 'umkm',
            'umkm' => $this->umkmModel->findAll()
        ];

        return view('admin/umkm', $data);
    }

    public function tambahumkm()
    {
        $data = [
            'title' => 'Tambah UMKM',
            'current_page' => 'umkm',
        ];
        return view('admin/tambahumkm', $data);
    }

    public function save()
    {
        // Ambil gambar yang diunggah
        $fileFoto = $this->request->getFile('foto');

        // Validasi ukuran dan ekstensi file
        if (!$fileFoto->isValid() || $fileFoto->getSize() > 10485760 || !in_array($fileFoto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
            session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');
            return redirect()->back()->withInput();
        }

        // Generate nama unik untuk file gambar
        $namaFoto = $fileFoto->getRandomName();

        // Pindahkan file gambar ke folder yang ditentukan (uploads/umkm)
        $fileFoto->move('uploads/umkm', $namaFoto);

        // Simpan data ke database
        $this->umkmModel->save([
            'nama' => $this->request->getVar('nama'),
            'foto' => $namaFoto,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'UMKM berhasil ditambahkan.');

        // Redirect ke halaman UMKM setelah berhasil disimpan
        return redirect()->to('/umkm');
    }

    public function edit($id)
    {
        $umkm = $this->umkmModel->find($id); // Ambil data UMKM berdasarkan ID

        if (!$umkm) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('UMKM tidak ditemukan');
        }

        $data = [
            'title' => 'Edit UMKM',
            'current_page' => 'umkm',
            'umkm' => $umkm
        ];

        return view('admin/editumkm', $data);
    }

    public function update($id)
    {
        // Ambil gambar yang diunggah
        $fileFoto = $this->request->getFile('foto');

        // Data untuk update ke database
        $data = [
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ];

        // Cek apakah ada foto baru yang diunggah
        if ($fileFoto->isValid() && !$fileFoto->hasMoved()) {
            // Validasi ukuran dan ekstensi file
            if ($fileFoto->getSize() > 10485760 || !in_array($fileFoto->getExtension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                session()->setFlashdata('error', 'Ukuran file maksimal 10MB dan ekstensi yang diperbolehkan adalah jpg, jpeg, png, webp.');
                return redirect()->back()->withInput();
            }

            // Hapus foto lama jika ada
            $umkm = $this->umkmModel->find($id);
            $oldFoto = $umkm['foto'];
            if ($oldFoto && $oldFoto != 'default.png' && file_exists('uploads/umkm/' . $oldFoto)) {
                unlink('uploads/umkm/' . $oldFoto);
            }

            // Generate nama unik untuk file gambar baru
            $namaFoto = $fileFoto->getRandomName();

            // Pindahkan file gambar baru ke folder yang ditentukan
            $fileFoto->move('uploads/umkm/', $namaFoto);

            // Tambahkan namaFoto ke data untuk update
            $data['foto'] = $namaFoto;
        }

        // Update data ke database
        $this->umkmModel->update($id, $data);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'UMKM berhasil diperbarui');

        // Redirect ke halaman UMKM setelah berhasil diupdate
        return redirect()->to('/umkm');
    }

    public function uploadImage()
    {
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke folder yang ditentukan (uploads/umkm)
            $image->move('uploads/umkm', $imageName);

            // Kembalikan URL dari gambar yang diunggah
            return $this->response->setJSON(['success' => true, 'url' => base_url('uploads/umkm/' . $imageName)]);
        } else {
            return $this->response->setJSON(['success' => false, 'error' => 'Upload failed']);
        }
    }

    public function delete($id)
    {
        // Hapus gambar terkait sebelum menghapus data dari database
        $umkm = $this->umkmModel->find($id);
        $foto = $umkm['foto'];
        if ($foto && file_exists('uploads/umkm/' . $foto) && $foto != 'default.png') {
            unlink('uploads/umkm/' . $foto);
        }

        // Hapus data dari database
        $this->umkmModel->delete($id);

        // Set Flashdata untuk notifikasi
        session()->setFlashdata('success', 'UMKM berhasil dihapus.');

        // Redirect ke halaman UMKM setelah berhasil dihapus
        return redirect()->to('/umkm');
    }
}
