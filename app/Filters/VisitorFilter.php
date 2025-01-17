<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\Admin\VisitorModel;

class VisitorFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $visitorModel = new VisitorModel();
        $ipAddress = $request->getIPAddress();

        // Cek apakah pengunjung sudah tercatat di cookie
        $cookieName = 'visitor_recorded';
        if (!isset($_COOKIE[$cookieName])) {
            // Jika belum tercatat, tambahkan ke database dan buat cookie
            $visitorModel->recordVisit($ipAddress);

            // Set cookie dengan durasi 24 jam (86400 detik)
            setcookie($cookieName, 'true', time() + 86400, "/");
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
