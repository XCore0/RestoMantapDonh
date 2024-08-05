<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function login()
    {
        return view("LoginPage");
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        // Input validation (expand as needed)
        if (empty($email) || empty($password)) {
            session()->setFlashdata('error', 'Email and password are required');
            return redirect()->back()->withInput();
        }

        $dataUser = $users->where('email', $email)->first();

        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                // Store user data in session
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->nama,
                    'kelas' => $dataUser->kelas,
                    'logged_in' => true,
                ]);

                // Redirect based on user role
                if ($dataUser->kelas === 'admin') {
                    return redirect()->to(base_url('admin'));
                } else {
                    return redirect()->to(base_url('home'));
                }
            } else {
                session()->setFlashdata('error', 'Incorrect email or password');
                return redirect()->back()->withInput();
            }
        } else {
            session()->setFlashdata('error', 'User not found');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
