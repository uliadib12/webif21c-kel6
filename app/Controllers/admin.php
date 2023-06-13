<?php

namespace App\Controllers;

use Config\App;

class admin extends BaseController
{
    public function index()
    {
        return view('admin');
    }
}
