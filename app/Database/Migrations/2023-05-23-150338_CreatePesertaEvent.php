<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesertaEvent extends Migration
{
    public function up()
    {
        // make table
        $this->forge->addField([
            'id_peserta_event' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false
            ],
            'id_event' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
            'id_user_peserta' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_peserta_event', true);
        $this->forge->createTable('peserta_event');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('peserta_event');
    }
}
