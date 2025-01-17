<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\UserModel;

class Login extends BaseController
{
    public function index()
    {
        // Jika pengguna sudah login, redirect ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        return view('admin/login');
    }

    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $user = $model->verifyUser($username, $password);

        if ($user) {
            // Set session
            $session = session();
            $session->set([
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'isLoggedIn' => true
            ]);

            return redirect()->to('/dashboard');
        } else {
            // Pesan Error
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        // Unset session data
        $session = session();
        $session->remove(['id_user', 'username', 'isLoggedIn']);

        // Redirect ke Beranda
        return redirect()->to('/');
    }
}
