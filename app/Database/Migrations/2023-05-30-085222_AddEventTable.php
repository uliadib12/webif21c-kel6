<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEventTable extends Migration
{
    public function up()
    {
        // add event table
        $this->forge->addField([
            'id_event' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'keterangan' => [
                'type' => 'TEXT'
            ],
            'tanggal' => [
                'type' => 'DATE'
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'penanggung_jawab' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gambar_poster' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'gambar_banner' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);

        $this->forge->addKey('id_event', true);
        $this->forge->createTable('event');
    }

    public function down()
    {
        // rollback
        $this->forge->dropTable('event');
    }
}
