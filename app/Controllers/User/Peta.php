<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\WisataModel;

class Peta extends BaseController
{
    public function index()
    {
        $wisataModel = new WisataModel();
        $wisataData = $wisataModel->findAll();

        $data = [
            'title' => 'Peta Wisata',
            'activePage' => 'peta',
            'wisata' => $wisataData
        ];
        return view('user/peta', $data);
    }
}
