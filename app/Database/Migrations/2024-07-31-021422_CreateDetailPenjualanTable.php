<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailPenjualanTable extends Migration
{
    public function up()
    {
        // Tabel detail_penjualan
        $this->forge->addField([
            'id_detail' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_penjualan' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'id_menu' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'quantity' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'harga' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_detail');
        $this->forge->addForeignKey('id_penjualan', 'penjualan', 'id_penjualan', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_menu', 'daftarmenu', 'id_menu', 'CASCADE', 'CASCADE');
        $this->forge->createTable('detail_penjualan');
    }

    public function down()
    {
        $this->forge->dropTable('detail_penjualan');
    }
}
