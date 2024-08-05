<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'noHp'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'password'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'kelas'    => [
                'type'           => 'enum',
                'constraint'     => "'admin','user'",
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);

        // Add primary key after adding fields
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
