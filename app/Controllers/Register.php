<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function register()
    {
        //
        echo view("RegisterPage");
    }

    public function process()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'noHp' => [
                'rules' => 'required|numeric|min_length[10]|max_length[15]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'numeric' => '{field} Harus berupa angka',
                    'min_length' => '{field} Minimal 10 Digit',
                    'max_length' => '{field} Maksimal 15 Digit',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Format {field} tidak valid',
                    'is_unique' => '{field} sudah digunakan'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 6 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'nama' => $this->request->getVar('nama'),
            'noHp' => $this->request->getVar('noHp'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'kelas' => 'user', // Set default role as 'user'
        ]);
        return redirect()->to('/login');
    }
}
