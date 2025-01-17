<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Admin\ArtikelModel;

class Berita extends BaseController
{
    public function index()
    {
        $artikelModel = new ArtikelModel();
        helper('text');

        $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1; // halaman saat ini
        $limit = 6; // jumlah artikel setiap halaman
        $offset = ($currentPage - 1) * $limit; // menghitung offset berdasarkan halaman

        $articles = $artikelModel->getArticlesWithPagination($limit, $offset);
        $totalArticles = $artikelModel->getTotalArticles();

        $data = [
            'title' => 'Artikel',
            'activePage' => 'berita',
            'articles' => $articles,
            'pager' => \Config\Services::pager(),
            'totalArticles' => $totalArticles,
            'limit' => $limit,
            'currentPage' => $currentPage
        ];

        return view('user/berita', $data);
    }

    public function detail($id)
    {
        $artikelModel = new ArtikelModel();
        $article = $artikelModel->find($id);

        if (!$article) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $article['judul'],
            'artikel' => $article
        ];

        return view('user/isiberita', $data);
    }
}
