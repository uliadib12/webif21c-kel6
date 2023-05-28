<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();
        return view('User/profile', [
            'user' => $user,    
        ]);
    }
}