<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DaftarMenu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_menu'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'harga'       => [
                'type'              => 'VARCHAR',
                'constraint'        => '100',
            ],
            'kategori' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
            ],
            'bahan' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'foto' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_menu');
        $this->forge->createTable('daftarmenu');
    }

    public function down()
    {
        //
        $this->forge->dropTable('daftarmenu');
    }
}
