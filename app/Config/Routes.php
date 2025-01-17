<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routing Admin
$routes->get('/login', 'Admin\Login::index');
$routes->post('/login/authenticate', 'Admin\Login::authenticate');
$routes->get('/logout', 'Admin\Login::logout');
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->get('/visimisi', 'Admin\VisiMisi::index');
$routes->get('/gambaranumum', 'Admin\GambaranUmum::index');
$routes->get('/strukturorganisasi', 'Admin\StrukturOrganisasi::index');
$routes->get('/wisata', 'Admin\Wisata::index');
$routes->get('/tambahwisata', 'Admin\Wisata::tambahwisata');
$routes->get('/artikel', 'Admin\Artikel::index');
$routes->get('/tambahartikel', 'Admin\Artikel::tambahartikel');
$routes->get('/editartikel', 'Admin\Artikel::editartikel');
$routes->get('/gallery', 'Admin\Gallery::index');
$routes->get('/tambahgallery', 'Admin\Gallery::tambahgallery');
$routes->get('/editgallery', 'Admin\Gallery::editgallery');
$routes->get('/pesan', 'Admin\Pesan::index');
$routes->get('/pesan/lihat/(:num)', 'Admin\Pesan::lihat/$1');
$routes->get('/pesan/hapus/(:num)', 'Admin\Pesan::hapus/$1');

// Routing User
$routes->get('/', 'User\Home::index');
$routes->get('/profil/gambaran-umum', 'User\GambaranUmum::index');
$routes->get('/profil/visi-misi', 'User\VisiMisi::index');
$routes->get('/profil/struktur-organisasi', 'User\StrukturOrganisasi::index');
$routes->get('/destinasi/pantai-mlarangan-asri', 'User\Pantai::index');
$routes->get('/destinasi/sawah-surjan', 'User\Sawah::index');
$routes->get('/berita', 'User\Berita::index');
$routes->get('/isiberita/(:num)', 'User\IsiBerita::index/$1');
$routes->get('/isiberita/(:num)', 'User\Berita::detail/$1');
$routes->get('/peta', 'User\Peta::index');

// Profil Pokdarwis
$routes->post('/visimisi/save', 'Admin\VisiMisi::saveVisiMisi');
$routes->post('/visimisi/uploadImage', 'Admin\VisiMisi::uploadImage');

$routes->post('/gambaranumum/save', 'Admin\GambaranUmum::saveGambaranUmum');
$routes->post('/gambaranumum/uploadImage', 'Admin\GambaranUmum::uploadImage');

$routes->post('/strukturorganisasi/save', 'Admin\StrukturOrganisasi::saveStrukturOrganisasi');
$routes->post('/strukturorganisasi/uploadImage', 'Admin\StrukturOrganisasi::uploadImage');

// Wisata
$routes->get('/wisata/edit/(:segment)', 'Admin\Wisata::editwisata/$1');
$routes->post('/wisata/update/(:segment)', 'Admin\Wisata::update/$1');
$routes->post('/wisata/delete/(:segment)', 'Admin\Wisata::delete/$1');
$routes->post('/wisata/save', 'Admin\Wisata::save');
$routes->post('/wisata/uploadImage', 'Admin\Wisata::uploadImage');

// Gallery
$routes->post('/gallery/save', 'Admin\Gallery::save');
$routes->post('/gallery/update/(:num)', 'Admin\Gallery::update/$1');
$routes->get('/gallery/edit/(:num)', 'Admin\Gallery::editgallery/$1');
$routes->get('/gallery/delete/(:num)', 'Admin\Gallery::delete/$1');

// Artikel
$routes->post('/artikel/save', 'Admin\Artikel::save');
$routes->post('/artikel/update/(:num)', 'Admin\Artikel::update/$1');
$routes->get('/artikel/edit/(:num)', 'Admin\Artikel::editartikel/$1');
$routes->get('/artikel/delete/(:num)', 'Admin\Artikel::delete/$1');
$routes->post('/artikel/uploadImage', 'Admin\Artikel::uploadImage');

$routes->post('/sawah/sendMessage', 'User\Sawah::sendMessage');
$routes->post('/pantai/sendMessage', 'User\Pantai::sendMessage');

// UMKM
$routes->get('/umkm', 'Admin\Umkm::index');
$routes->get('/umkm/tambahumkm', 'Admin\Umkm::tambahumkm');
$routes->post('/umkm/save', 'Admin\Umkm::save');
$routes->get('/umkm/edit/(:num)', 'Admin\Umkm::edit/$1');
$routes->post('/umkm/update/(:num)', 'Admin\Umkm::update/$1');
$routes->get('/umkm/delete/(:num)', 'Admin\Umkm::delete/$1');
$routes->post('/umkm/uploadImage', 'Admin\Umkm::uploadImage');

// Routing User UMKM
$routes->get('/umkm/(:num)', 'User\Umkm::index/$1');
$routes->get('/', 'User\Visitor::index');
