<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditKategoriTable extends Migration
{
    public function up()
    {
        // edit kategori table
        // add column 'id_event'

        $this->forge->addColumn('kategori', [
            'id_event' => [
                'after' => 'id',
                'type' => 'INT',
                'constraint' => 11,
                'null' => true
            ]
        ]);
    }

    public function down()
    {
        // rollback
        $this->forge->dropColumn('kategori', 'id_event');
    }
}
