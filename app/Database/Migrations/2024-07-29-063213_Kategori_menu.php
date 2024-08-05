<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori_menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_kategori', true); // Set id_kategori as primary key
        $this->forge->createTable('kategori_menu');
    }

    public function down()
    {
        $this->forge->dropTable('kategori_menu');
    }
}
