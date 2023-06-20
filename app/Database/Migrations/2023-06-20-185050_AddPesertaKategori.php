<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPesertaKategori extends Migration
{
    public function up()
    {
        // make peserta_kategori table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ],
            'id_user' => [
                'type' => 'INT',
                'unsigned' => TRUE,
                'constraint' => 11,
            ],
            'id_kategori' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('peserta_kategori');
    }

    public function down()
    {
        // drop peserta_kategori table
        $this->forge->dropTable('peserta_kategori');
    }
}
