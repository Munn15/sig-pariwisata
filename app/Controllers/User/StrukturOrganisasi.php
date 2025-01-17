<?php

namespace App\Controllers\User;

use App\Models\Admin\StrukturOrganisasiModel;
use App\Controllers\BaseController;

class StrukturOrganisasi extends BaseController
{
    public function index()
    {
        $strukturOrganisasiModel = new StrukturOrganisasiModel();

        $data = [
            'title' => 'Struktur Organisasi Pokdarwis',
            'activePage' => 'profil',
            'subPage' => 'struktur-organisasi',
            'content' => $strukturOrganisasiModel->getStrukturOrganisasi()['content']
        ];
        return view('user/strukturorganisasi', $data);
    }
}
