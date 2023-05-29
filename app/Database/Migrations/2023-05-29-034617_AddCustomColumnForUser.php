<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCustomColumnForUser extends Migration
{
    public function up()
    {
        $fields = [
            'profile_picture' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
        ];

        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $fields = [
            'profile_picture',
        ];
        $this->forge->dropColumn('users', $fields);
    }
}
