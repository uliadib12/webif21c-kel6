<?php

namespace App\Database\Seeds;

use CodeIgniter\Shield\Entities\User;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
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

        $users->save($user);

        // To get the complete user object with ID, we need to get from the database
        $user = $users->findById($users->getInsertID());

        // Add to default group
        $user->addGroup('user');

        $users->save($admin);
        $user = $users->findById($users->getInsertID());
        $user->addGroup('admin');
    }
}
