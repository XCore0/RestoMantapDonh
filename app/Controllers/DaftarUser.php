<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class DaftarUser extends BaseController
{
    protected $daftaruser;

    public function __construct()
    {
        // Inisialisasi model
        $this->daftaruser = new UsersModel();
    }

    public function index()
    {
        // Mengambil semua data dari tabel 'daftaruser'
        $data['users'] = $this->daftaruser->findAll();

        // Mengembalikan view dengan data
        return view('admin/Users', $data);
    }

    public function update($id)
    {
        $user = $this->daftaruser->find($id);
        if (empty($user)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user tidak ditemukan!');
        }
        $data['user'] = $user;
        return view('admin/user-edit', $data);
    }

    // Mengupdate data user
    public function edit($id)
    {        
        // Validasi data
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'noHp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'password' => [
                'rules' => 'permit_empty|min_length[4]',
                'errors' => [
                    'min_length' => '{field} minimal 4 karakter'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Ambil data yang ada di database
        $existingData = $this->daftaruser->find($id);
        if (empty($existingData)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data user tidak ditemukan!');
        }

        // Perbarui data user
        $dataToUpdate = [
            'nama' => $this->request->getVar('nama'),
            'noHp' => $this->request->getVar('noHp'),
            'email' => $this->request->getVar('email'),
            'kelas' => $this->request->getVar('kelas'),
            'password' => $this->request->getVar('password') ? password_hash($this->request->getVar('password'), PASSWORD_DEFAULT) : $existingData->password,
        ];

        $this->daftaruser->update($id, $dataToUpdate);

        session()->setFlashdata('message', 'Update Data user Berhasil');
        return redirect()->to('/users');
    }

    function delete($id)
    {
        $daftaruser = $this->daftaruser->find($id);
        if (empty($daftaruser)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data daftaruser Tidak ditemukan !');
        }
        $this->daftaruser->delete($id);
        session()->setFlashdata('message', 'Delete Data daftaruser Berhasil');
        return redirect()->to('/users');
    }
}
