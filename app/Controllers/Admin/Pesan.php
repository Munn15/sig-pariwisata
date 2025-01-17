<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\MessageModel;

class Pesan extends BaseController
{
    protected $messageModel;

    public function __construct()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $this->messageModel = new MessageModel();
        helper('text');
    }

    public function index()
    {
        $data['title'] = 'Pesan';
        $data['current_page'] = 'pesan';

        // Fetch all messages from the database
        $data['messages'] = $this->messageModel->orderBy('id_messages', 'DESC')->findAll();

        return view('admin/pesan', $data);
    }

    public function lihat($id)
    {
        $message = $this->messageModel->find($id);

        if (!$message) {
            // Tampilkan halaman 404 jika pesan tidak ditemukan
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['message'] = $message;
        $data['title'] = 'Detail Pesan';
        $data['current_page'] = 'pesan';

        return view('admin/lihatpesan', $data);
    }

    public function hapus($id)
    {
        $message = $this->messageModel->find($id);

        if (!$message) {
            // Tampilkan halaman 404 jika pesan tidak ditemukan
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Lakukan penghapusan pesan dari database
        $this->messageModel->delete($id);

        // Set notifikasi bahwa pesan berhasil dihapus
        session()->setFlashdata('success', 'Pesan berhasil dihapus.');

        // Redirect kembali ke halaman index pesan
        return redirect()->to('/pesan');
    }
}
