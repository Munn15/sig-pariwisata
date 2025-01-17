<?php

namespace App\Controllers\User;

use App\Models\Admin\VisiMisiModel;
use App\Controllers\BaseController;

class VisiMisi extends BaseController
{
    public function index()
    {
        $visiMisiModel = new VisiMisiModel();

        $data = [
            'title' => 'Visi Misi Pokdarwis',
            'activePage' => 'profil',
            'subPage' => 'visi-misi',
            'content' => $visiMisiModel->getVisiMisi()['content']
        ];
        return view('user/visimisi', $data);
    }
}
