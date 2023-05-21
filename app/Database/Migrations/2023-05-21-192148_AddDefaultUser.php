<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Shield\Entities\User;

class AddDefaultUser extends Migration
{
    public function up()
    {
        // Get the User Provider (UserModel by default)
        $users = auth()->getProvider();

        $user = new User([
            'username' => 'user',
            'email'    => 'user@gmail.com',
            'password' => 'orangbiasa',
        ]);

        $admin = new User([
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => 'katasandi',
        ]);

        // check if user already exists
        if (! $users->where('username', $user->username)->first()) {
            $users->save($user);
            // To get the complete user object with ID, we need to get from the database
            $user = $users->findById($users->getInsertID());
            // Add to default group
            $user->addGroup('user');
        }

        
        // check if admin already exists
        if (! $users->where('username', $admin->username)->first()) {
            $users->save($admin);
            $user = $users->findById($users->getInsertID());
            $user->addGroup('admin');
        }
    }

    public function down()
    {
        //
    }
}
