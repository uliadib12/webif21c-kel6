<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditEventTable extends Migration
{
    public function up()
    {
        // edit event table
        // remove column 'kapasitas'
        // remove column 'id_jadwal'
        // add column 'penanggung_jawab'
        // add column 'tempat'
        // add column 'tanggal'

        $this->forge->dropColumn('event', 'kapasitas');
        $this->forge->dropColumn('event', 'id_jadwal');
        $this->forge->addColumn('event', [
            'penanggung_jawab' => [
                'after' => 'keterangan', 
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'tanggal' => [
                'after' => 'penanggung_jawab',
                'type' => 'DATE',
                'null' => true
            ],
            'tempat' => [
                'after' => 'tanggal',
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        // rollback
        $this->forge->addColumn('event', [
            'kapasitas' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ],
            'id_jadwal' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ]
        ]);
        $this->forge->dropColumn('event', 'penanggung_jawab');
        $this->forge->dropColumn('event', 'tempat');
    }
}
