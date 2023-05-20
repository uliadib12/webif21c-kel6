<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'pendaftaran' => [
                'type' => 'DATE'
            ],
            'jamAwalPendaftaran' => [
                'type' => 'TIME'
            ],
            'jamAkhirPendaftaran' => [
                'type' => 'TIME'
            ],
            'penyisihan' => [
                'type' => 'DATE'
            ],
            'jamAwalPenyisihan' => [
                'type' => 'TIME'
            ],
            'jamAkhirPenyisihan' => [
                'type' => 'TIME'
            ],
            'pengumuman' => [
                'type' => 'DATE'
            ],
            'final' => [
                'type' => 'DATE'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
