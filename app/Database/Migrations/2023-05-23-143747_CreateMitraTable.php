<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMitraTable extends Migration
{
    public function up()
    {
        // make mitra table
        $this->forge->addField([
            'id_mitra' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
                'null' => false
            ],
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false
            ],
        ]);

        $this->forge->addKey('id_mitra', true);
        $this->forge->createTable('mitra');
    }

    public function down()
    {
        $this->forge->dropTable('mitra');
    }
}
