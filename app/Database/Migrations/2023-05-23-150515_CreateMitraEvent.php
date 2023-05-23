<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMitraEvent extends Migration
{
    public function up()
    {
        // make table
        $this->forge->addField([
            'id_mitra_event' => [
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
            'id_user_mitra' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_mitra_event', true);
        $this->forge->createTable('mitra_event');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('mitra_event');
    }
}
