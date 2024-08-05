<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'daftarmenu';
    protected $primaryKey = 'id_menu';
    protected $returnType = 'object'; // Mengembalikan data sebagai objek
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'harga', 'kategori', 'deskripsi', 'foto'];
    
}
