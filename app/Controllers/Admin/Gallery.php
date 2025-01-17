<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\GalleryModel;
use App\Models\Admin\WisataModel;

class Gallery extends BaseController
{
    public function __construct()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }
    }

    public function index()
    {
        $galleryModel = new GalleryModel();
        $wisataModel = new WisataModel();

        $data['title'] = 'Gallery';
        $data['current_page'] = 'gallery';
        $data['photos'] = $galleryModel->orderBy('id_gallery', 'DESC')->findAll();

        foreach ($data['photos'] as &$photo) {
            $wisata = $wisataModel->find($photo['id_wisata']);
            $photo['nama_wisata'] = $wisata['nama'];
        }

        return view('admin/gallery', $data);
    }

    public function tambahgallery()
    {
        $wisataModel = new WisataModel();
        $data['title'] = 'Tambah Gallery';
        $data['current_page'] = 'tambahgallery';
        $data['wisata'] = $wisataModel->findAll();

        return view('admin/tambahgallery', $data);
    }

    public function save()
    {
        $galleryModel = new GalleryModel();

        $photo = $this->request->getFile('foto');
        $id_wisata = $this->request->getPost('id_wisata');

        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

        if ($photo->isValid() && !$photo->hasMoved() && $photo->getSize() <= 10 * 1024 * 1024 && in_array($photo->getClientExtension(), $allowedExtensions)) {
            $photoName = $photo->getRandomName();
            $photo->move('uploads/gallery', $photoName);

            $galleryModel->save([
                'foto' => $photoName,
                'id_wisata' => $id_wisata
            ]);

            return redirect()->to('/gallery')->with('message', 'Foto berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Gagal mengunggah foto. Pastikan ukuran foto tidak melebihi 10 MB dan ekstensi foto adalah jpg, jpeg, png, atau webp.');
        }
    }

    public function editgallery($id_gallery)
    {
        $galleryModel = new GalleryModel();
        $wisataModel = new WisataModel();

        $data['title'] = 'Edit Gallery';
        $data['current_page'] = 'editgallery';
        $data['photo'] = $galleryModel->find($id_gallery);
        $data['wisata'] = $wisataModel->findAll();
        return view('admin/editgallery', $data);
    }

    public function update($id_gallery)
    {
        $galleryModel = new GalleryModel();

        // Ambil file foto yang diunggah
        $foto = $this->request->getFile('foto');
        $id_wisata = $this->request->getPost('id_wisata');

        // Daftar ekstensi yang diizinkan
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];

        // Cek apakah ada foto yang diunggah
        if ($foto->isValid() && !$foto->hasMoved() && $foto->getSize() <= 10 * 1024 * 1024 && in_array($foto->getClientExtension(), $allowedExtensions)) {
            // Generate nama acak untuk foto baru
            $photoName = $foto->getRandomName();

            // Pindahkan foto baru ke folder uploads/gallery
            $foto->move('uploads/gallery', $photoName);

            // Hapus foto lama jika ada
            $oldPhoto = $galleryModel->find($id_gallery)['foto'];
            if (!empty($oldPhoto)) {
                $oldPhotoPath = FCPATH . 'uploads/gallery/' . $oldPhoto;
                if (file_exists($oldPhotoPath)) {
                    unlink($oldPhotoPath);
                }
            }

            // Update data foto di database
            $galleryModel->update($id_gallery, [
                'foto' => $photoName,
                'id_wisata' => $id_wisata
            ]);

            // Redirect dengan pesan sukses
            return redirect()->to('/gallery')->with('message', 'Foto berhasil diupdate.');
        } else {
            if ($foto->isValid() && !$foto->hasMoved()) {
                // Jika file yang diunggah tidak valid, kirim pesan error
                return redirect()->back()->with('error', 'Gagal mengunggah foto. Pastikan ukuran foto tidak melebihi 10 MB dan ekstensi foto adalah jpg, jpeg, png, atau webp.');
            } else {
                // Jika tidak ada foto yang diunggah, hanya update kategori
                $galleryModel->update($id_gallery, [
                    'id_wisata' => $id_wisata
                ]);

                // Redirect dengan pesan sukses
                return redirect()->to('/gallery')->with('message', 'Kategori berhasil diupdate.');
            }
        }
    }


    public function delete($id_gallery)
    {
        $galleryModel = new GalleryModel();
        $gallery = $galleryModel->find($id_gallery);
        $photo = $gallery['foto'];

        // Hapus file gambar dari folder uploads/gallery
        if (!empty($photo)) {
            $photoPath = FCPATH . 'uploads/gallery/' . $photo;
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }

        // Hapus record dari database
        $galleryModel->delete($id_gallery);

        return redirect()->to('/gallery')->with('message', 'Foto berhasil dihapus.');
    }
}
