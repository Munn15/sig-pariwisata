<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\WisataModel;
use App\Models\Admin\GalleryModel;
use App\Models\Admin\MessageModel;

class Pantai extends BaseController
{
    public function index()
    {
        $model = new WisataModel();
        $galleryModel = new GalleryModel();

        $wisata = $model->where('nama', 'Pantai Mlarangan Asri')->first();
        $photos = $galleryModel->getPhotosByWisata($wisata['id_wisata']);

        $data = [
            'title' => 'Pantai Mlarangan Asri',
            'activePage' => 'destinasi',
            'subPage' => 'pantai-mlarangan-asri',
            'wisata' => $wisata,
            'photos' => $photos
        ];
        return view('user/pantaimlaranganasri', $data);
    }

    public function sendMessage()
    {
        $messageModel = new MessageModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
            'subscribe' => $this->request->getPost('subscribe') ? 1 : 0,
        ];

        if ($messageModel->save($data)) {
            return redirect()->to(base_url('destinasi/pantai-mlarangan-asri'))->with('status', 'Pesan Anda telah terkirim.');
        } else {
            return redirect()->to(base_url('destinasi/pantai-mlarangan-asri'))->with('status', 'Gagal mengirim pesan.');
        }
    }
}
