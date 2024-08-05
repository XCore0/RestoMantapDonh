<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\KategoriModel;

class DaftarMenu extends BaseController
{
    protected $daftarmenu;

    public function __construct()
    {
        // Inisialisasi model
        $this->daftarmenu = new MenuModel();
    }

    public function index()
    {
        // Mengambil semua data dari tabel 'daftarmenu'
        $data['daftarmenu'] = $this->daftarmenu->findAll();

        // Mengembalikan view dengan data
        return view('admin/daftarmenu', $data);
    }

    public function create()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori_menu'] = $kategoriModel->findAll(); // Ambil semua data kategori

        return view('admin/create', $data);
    }

    public function tambah()
    {
        $kategori = $this->request->getPost('kategori');
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'uploaded' => 'Harus upload file foto',
                    'max_size' => 'Ukuran foto maksimal 2MB',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Format foto tidak didukung'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $foto = $this->request->getFile('foto');
        $fotoName = $foto->getRandomName();
        $foto->move(ROOTPATH . 'public/public', $fotoName);

        $this->daftarmenu->insert([
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $fotoName
        ]);

        session()->setFlashdata('message', 'Tambah Data daftarmenu Berhasil');
        return redirect()->to('/daftarmenu');
    }

    public function update($id)
    {
        $kategoriModel = new KategoriModel();
        $data['kategori_menu'] = $kategoriModel->findAll(); // Ambil semua data kategori

        $daftarMenuModel = new MenuModel();
        $data['daftarmenu'] = $daftarMenuModel->find($id);

        if (empty($data['daftarmenu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data daftarmenu tidak ditemukan!');
        }

        return view('admin/edit', $data);
    }

    public function edit($id)
    {
        $kategoriModel = new KategoriModel();
        $data['kategori_menu'] = $kategoriModel->findAll(); // Ambil semua data kategori

        $daftarMenuModel = new MenuModel();
        $existingData = $daftarMenuModel->find($id);
        if (empty($existingData)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data daftarmenu tidak ditemukan!');
        }

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'foto' => [
                'rules' => 'if_exist|uploaded[foto]|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png,image/webp]',
                'errors' => [
                    'uploaded' => 'Harus upload file foto',
                    'max_size' => 'Ukuran foto maksimal 2MB',
                    'is_image' => 'File harus berupa gambar',
                    'mime_in' => 'Format foto tidak didukung'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        // Ambil data yang ada di database
        $dataToUpdate = [
            'nama' => $this->request->getVar('nama'),
            'harga' => $this->request->getVar('harga'),
            'kategori' => $this->request->getVar('kategori'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ];

        // Periksa apakah ada file foto yang diunggah
        $foto = $this->request->getFile('foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Jika ada file foto baru, proses pengunggahan
            $fotoName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'public/public', $fotoName);
            $dataToUpdate['foto'] = $fotoName;
        } else {
            // Jika tidak ada file foto baru, gunakan nama foto yang lama
            $dataToUpdate['foto'] = $existingData->foto;
        }

        // Perbarui data menu
        $this->daftarmenu->update($id, $dataToUpdate);

        session()->setFlashdata('message', 'Update Data daftarmenu Berhasil');
        return redirect()->to('/daftarmenu');
    }

    public function delete($id)
    {
        $daftarmenu = $this->daftarmenu->find($id);
        if (empty($daftarmenu)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data daftarmenu Tidak ditemukan !');
        }
        $this->daftarmenu->delete($id);
        session()->setFlashdata('message', 'Delete Data daftarmenu Berhasil');
        return redirect()->to('/daftarmenu');
    }

    public function show($id)
    {
        $menuModel = new MenuModel();
        $menu = $menuModel->find($id);

        if ($menu) {
            // Data ditemukan
            $data['menu'] = $menu;
        } else {
            // Data tidak ditemukan
            $data['menu'] = null;
        }

        return view('menu_detail_view', $data);
    }
}
