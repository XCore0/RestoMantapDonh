<?php

namespace App\Controllers;

use App\Models\MenuModel; // Pastikan model yang sesuai digunakan
use App\Models\KategoriModel; // Pastikan model yang sesuai digunakan

use App\Models\UsersModel;

class User extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel(); // Inisialisasi model menu
    }

    public function home()
    {
        //
        echo view("Home");
    }

    public function menu()
    {
        $model = new KategoriModel();
        $data['kategori'] = $model->findAll();
        $data['menus'] = $this->menuModel->findAll(); // Ambil semua data menu dari model
        return view('MenuPage', $data);
    }

    public function cart()
    {
        //
        echo view("CartPage");
    }

    public function checkout()
    {
        //
        echo view("CheckoutPage");
    }

    public function aboutus()
    {
        //
        echo view("AboutUsPage");
    }

    public function contackus()
    {
        //
        echo view("ContackUsPage");
    }

    public function menudetail($id)
    {
        $data['menu'] = $this->menuModel->find($id); // Ambil data menu berdasarkan ID
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu tidak ditemukan!');
        }
        return view('MenuDetailPage', $data);
    }
}
