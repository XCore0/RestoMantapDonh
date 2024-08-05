<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SalesModel;
use App\Models\DetailPenjualanModel;
use App\Models\MenuModel;


class Checkout extends Controller
{
    public function process()
    {
        // Mendapatkan data dari request JSON
        $data = $this->request->getJSON(true);

        // Periksa apakah total harga ada
        if (!isset($data['total_harga'])) {
            return $this->response->setJSON(['success' => false, 'message' => 'Total harga tidak tersedia.']);
        }

        // Anda dapat memproses data atau melakukan tindakan lain di sini
        // Misalnya, hanya menampilkan data atau mengarahkan pengguna ke halaman konfirmasi

        return $this->response->setJSON(['success' => true, 'message' => 'Pembayaran berhasil diproses.']);
    }

    public function confirm()
    {
        $salesModel = new SalesModel();
        $detailSalesModel = new DetailPenjualanModel();
        $menuModel = new MenuModel();

        $request = \Config\Services::request();
        $jsonData = $request->getBody();

        try {
            $data = json_decode($jsonData, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception('Gagal memparsing JSON: ' . json_last_error_msg());
            }
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => 'Gagal memproses JSON: ' . $e->getMessage()]);
        }

        $totalHarga = $data['total_harga'];
        $address = $data['address'];
        $phoneNumber = $data['phone_number'];
        $paymentMethod = $data['payment_method'];
        $orderDetails = $data['order_details'];

        $session = session();
        $userName = $session->get('name');

        if (!$userName) {
            return $this->response->setJSON(['success' => false, 'message' => 'Nama pengguna tidak ditemukan dalam sesi']);
        }

        foreach ($orderDetails as $detail) {
            if (!isset($detail['id_menu']) || $detail['id_menu'] === 'undefined') {
                return $this->response->setJSON(['success' => false, 'message' => 'ID menu tidak ditemukan: ' . $detail['id_menu']]);
            }

            $menu = $menuModel->find($detail['id_menu']);
            if (!$menu) {
                return $this->response->setJSON(['success' => false, 'message' => 'ID menu tidak ditemukan: ' . $detail['id_menu']]);
            }

            if (!isset($detail['id_menu'], $detail['quantity'], $detail['price'])) {
                return $this->response->setJSON(['success' => false, 'message' => 'Invalid order details format']);
            }
        }

        $salesData = [
            'tanggal_penjualan' => date('Y-m-d H:i:s'),
            'total_harga' => $totalHarga,
            'nama' => $userName,
            'alamat' => $address,
            'nomor_telepon' => $phoneNumber,
            'metode_pembayaran' => $paymentMethod
        ];

        $salesId = $salesModel->insert($salesData);

        foreach ($orderDetails as $detail) {
            $detailData = [
                'id_penjualan' => $salesId,
                'id_menu' => $detail['id_menu'],
                'quantity' => $detail['quantity'],
                'harga' => $detail['price'],
            ];
            $detailSalesModel->insert($detailData);
        }

        // Redirect ke halaman hasil pembelian
        return $this->response->setJSON(['success' => true, 'redirect' => "/checkout/result/{$salesId}"]);
    }

    public function result($id)
    {
        $salesModel = new SalesModel();
        $detailModel = new DetailPenjualanModel();
        $menuModel = new MenuModel();

        // Ambil data penjualan
        $sales = $salesModel->find($id);

        if (!$sales) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Sales not found');
        }

        // Ambil detail penjualan berdasarkan ID penjualan
        $details = $detailModel->where('id_penjualan', $id)->findAll();

        // Ambil data menu untuk setiap detail
        foreach ($details as &$detail) {
            $menu = $menuModel->find($detail->id_menu);
            $detail->nama = $menu->nama;
            $detail->harga = $menu->harga;
            $detail->foto = $menu->foto;
        }

        // Kirim data ke view
        $data = [
            'sales' => $sales,
            'details' => $details
        ];

        return view('order_view', $data);
    }
}
