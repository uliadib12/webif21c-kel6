<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $seeder = \Config\Database::seeder();
        $seeder->call('UserSeeder');
    }

    public function down()
    {
        
    }
}
