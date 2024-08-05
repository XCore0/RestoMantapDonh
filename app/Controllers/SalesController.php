<?php

namespace App\Controllers;

use App\Models\SalesModel;
use App\Models\DetailPenjualanModel;

class SalesController extends BaseController
{
    public function index()
    {
        $salesModel = new SalesModel();
        $data['sales'] = $salesModel->findAll();

        return view('admin/laporan', $data);
    }

    public function details($id)
    {
        $salesModel = new SalesModel();
        $detailSalesModel = new DetailPenjualanModel();

        // Ambil data penjualan berdasarkan ID
        $data['sale'] = $salesModel->find($id);
        if (!$data['sale']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Penjualan dengan ID $id tidak ditemukan.");
        }

        // Ambil detail penjualan berdasarkan ID penjualan
        $data['details'] = $detailSalesModel->getDetailsBySaleId($id);

        return view('admin/laporan_view', $data);
    }

    public function getSalesData($period = 'daily')
    {
        $salesModel = new SalesModel();
        $data = $salesModel->getSalesData($period);
        return $this->response->setJSON($data);
    }
}
