<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePanitaEvent extends Migration
{
    public function up()
    {
        // make table
        $this->forge->addField([
            'id_panitia_event' => [
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
            'id_user_panitia' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_panitia_event', true);
        $this->forge->createTable('panitia_event');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('panitia_event');
    }
}