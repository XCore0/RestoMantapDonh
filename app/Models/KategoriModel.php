<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori_menu';
    protected $primaryKey = 'id_kategori';
    protected $returnType = 'array';
    protected $useTimestamps = false;
    protected $allowedFields = ['kategori'];
}
