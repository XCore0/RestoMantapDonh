<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';

    protected $allowedFields = ['tanggal_penjualan', 'total_harga', 'nama'];

    protected $useTimestamps = true;
}
