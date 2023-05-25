<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnMitra extends Migration
{
    public function up()
    {
        // add column to table mitra,
        // column name : pendanaan
        // type : decimal(15,2)
        // after : email
        
        $this->forge->addColumn('mitra', [
            'pendanaan' => [
                'type' => 'decimal',
                'constraint' => '15,2',
                'after' => 'email'
            ]
        ]);
    }

    public function down()
    {
        // drop column pendanaan from table mitra
        $this->forge->dropColumn('mitra', 'pendanaan');
    }
}
