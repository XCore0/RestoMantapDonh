<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $table = 'detail_penjualan';
    protected $primaryKey = 'id_detail';
    protected $returnType = 'object'; // Mengembalikan data sebagai objek
    protected $allowedFields = ['id_penjualan', 'id_menu', 'quantity', 'harga'];
    protected $useTimestamps = true;

    public function getDetailsBySaleId($saleId)
    {
        return $this->select('detail_penjualan.*, daftarmenu.foto, daftarmenu.nama, daftarmenu.harga')
            ->join('daftarmenu', 'detail_penjualan.id_menu = daftarmenu.id_menu')
            ->where('id_penjualan', $saleId)
            ->findAll();
    }
}
