<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJuriEvent extends Migration
{
    public function up()
    {
        // make table
        $this->forge->addField([
            'id_juri_event' => [
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
            'id_user_juri' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_juri_event', true);
        $this->forge->createTable('juri_event');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('juri_event');
    }
}
