<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();
        return view('home', [
            'user' => $user,
            'isDashboard' => isset($user) ? $user->can('admin.dashboard') : NULL,
        ]);
    }
}
