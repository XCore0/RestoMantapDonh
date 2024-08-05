<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $returnType = 'object'; // Pastikan ini diatur
    protected $useTimestamps = true;
    protected $allowedFields = ['tanggal_penjualan', 'nama', 'alamat', 'nomor_telepon', 'total_harga', 'metode_pembayaran'];

    public function getSalesData($period)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table);

        switch ($period) {
            case 'daily':
                $builder->select('DATE(tanggal_penjualan) as date, COUNT(id_penjualan) as total');
                $builder->groupBy('DATE(tanggal_penjualan)');
                break;
            case 'weekly':
                $builder->select('WEEK(tanggal_penjualan, 1) as week, YEAR(tanggal_penjualan) as year, COUNT(id_penjualan) as total');
                $builder->groupBy('YEAR(tanggal_penjualan), WEEK(tanggal_penjualan, 1)');
                break;
            case 'monthly':
                $builder->select('MONTH(tanggal_penjualan) as month, YEAR(tanggal_penjualan) as year, COUNT(id_penjualan) as total');
                $builder->groupBy('YEAR(tanggal_penjualan), MONTH(tanggal_penjualan)');
                break;
            case 'yearly':
                $builder->select('YEAR(tanggal_penjualan) as year, COUNT(id_penjualan) as total');
                $builder->groupBy('YEAR(tanggal_penjualan)');
                break;
        }

        $query = $builder->get();
        return $query->getResult();
    }
}
