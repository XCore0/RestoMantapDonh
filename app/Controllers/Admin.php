<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SalesModel;
use App\Models\MenuModel;
use App\Models\DetailPenjualanModel;
use App\Models\KategoriModel;
use App\Models\UsersModel;

class Admin extends BaseController
{
    public function index()
    {
        $detailPenjualanModel = new DetailPenjualanModel();
        $menuModel = new MenuModel();
        $kategoriModel = new KategoriModel();
        $usersModel = new UsersModel();
        $salesModel = new SalesModel();

        // Mengambil data detail penjualan
        $detailPenjualans = $detailPenjualanModel->findAll();
        // Mengambil data menu
        $menus = $menuModel->findAll();
        // Menghitung jumlah setiap menu yang terjual
        $menuCounts = [];
        foreach ($detailPenjualans as $detail) {
            $menuId = $detail->id_menu;
            if (!isset($menuCounts[$menuId])) {
                $menuCounts[$menuId] = 0;
            }
            $menuCounts[$menuId] += $detail->quantity;
        }
        // Membuat array nama menu dari data menu
        $menuNames = [];
        foreach ($menus as $menu) {
            $menuNames[$menu->id_menu] = $menu->nama;
        }

        // Menghitung jumlah data dari tabel lain
        $data['menu_count'] = $menuModel->countAllResults();
        $data['kategori_count'] = $kategoriModel->countAllResults();
        $data['users_count'] = $usersModel->countAllResults();
        $data['sales_count'] = $salesModel->countAllResults();

        $data['menuCounts'] = $menuCounts;
        $data['menuNames'] = $menuNames;

        return view('admin/index', $data);
    }

    public function daftarmenu()
    {
        echo view("admin/daftarmenu");
    }
}
