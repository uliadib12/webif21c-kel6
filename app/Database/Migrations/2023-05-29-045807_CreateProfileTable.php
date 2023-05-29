<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfileTable extends Migration
{
    public function up()
    {
        // Create Profile Table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => true,
                'null' => false,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unique' => true,
                'null' => false,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'npm' => [
                'type' => 'INT',
                'constraint' => 10,
                'null' => true,
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => true,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['Laki-Laki', 'Perempuan'],
                'null' => true,
            ],
            'fakultas' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'jurusan' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
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

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('profile');
    }

    public function down()
    {
        // Drop Profile Table
        $this->forge->dropTable('profile');
    }
}
