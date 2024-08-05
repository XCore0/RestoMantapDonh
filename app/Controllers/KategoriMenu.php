<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class KategoriMenu extends BaseController
{
    protected $kategorimenu;

    public function __construct()
    {
        // Inisialisasi model
        $this->kategorimenu = new KategoriModel();
    }

    public function index()
    {
        // Mengambil semua data dari tabel 'kategorimenu'
        $data['kategori_menu'] = $this->kategorimenu->findAll();

        // Mengembalikan view dengan data
        return view('admin/kategori', $data);
    }

    public function create()
    {
        return view('admin/kategori-tambah');
    }

    public function tambah()
    {
        // Validasi input
        if (!$this->validate([
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            // Mengatur pesan error ke session dan mengembalikan ke halaman sebelumnya
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Menyimpan data ke dalam database
        $this->kategorimenu->insert([
            'kategori' => $this->request->getVar('kategori'),
        ]);

        // Menetapkan pesan sukses dan mengarahkan ke halaman kategori
        session()->setFlashdata('message', 'Tambah data kategori berhasil');
        return redirect()->to('kategori');
    }

    function delete($id)
    {
        $kategorimenu = $this->kategorimenu->find($id);
        if (empty($kategorimenu)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data kategorimenu Tidak ditemukan !');
        }
        $this->kategorimenu->delete($id);
        session()->setFlashdata('message', 'Delete Data kategorimenu Berhasil');
        return redirect()->to('kategori');
    }

    
}
