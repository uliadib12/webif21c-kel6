<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();
        if(isset($user)){
            return view('home', [
                'user' => $user,
                'isDashboard' => $user->can('admin.dashboard'),
            ]);
        }
        return view('home');
    }
}
