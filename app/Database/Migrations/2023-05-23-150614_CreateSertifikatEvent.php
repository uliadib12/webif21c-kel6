<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSertifikatEvent extends Migration
{
    public function up()
    {
        // make table
        $this->forge->addField([
            'id_sertifikat_event' => [
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
            'id_user_sertifikat' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_sertifikat_event', true);
        $this->forge->createTable('sertifikat_event');
    }

    public function down()
    {
        // drop table
        $this->forge->dropTable('sertifikat_event');
    }
}
