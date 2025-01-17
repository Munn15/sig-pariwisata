<?php

namespace App\Controllers\User;

use App\Models\Admin\GambaranUmumModel;
use App\Controllers\BaseController;

class GambaranUmum extends BaseController
{
    public function index()
    {
        $gambaranUmumModel = new GambaranUmumModel();

        $data = [
            'title' => 'Gambaran Umum Pokdarwis',
            'activePage' => 'profil',
            'subPage' => 'gambaran-umum',
            'content' => $gambaranUmumModel->getGambaranUmum()['content']
        ];
        return view('user/gambaranumum', $data);
    }
}
