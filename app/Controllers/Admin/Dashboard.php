<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\WisataModel;
use App\Models\Admin\ArtikelModel;

class Dashboard extends BaseController
{
    protected $wisataModel;
    protected $artikelModel;

    public function __construct()
    {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            header('Location: /login');
            exit;
        }

        $this->wisataModel = new WisataModel();
        $this->artikelModel = new ArtikelModel();
        helper('text');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['current_page'] = 'dashboard';
        $data['jumlah_wisata'] = $this->wisataModel->countAll();
        $data['jumlah_artikel'] = $this->artikelModel->countAll();
        $data['latestArticles'] = $this->artikelModel->getLatestArticles(5);
        return view('admin/index', $data);
    }
}
