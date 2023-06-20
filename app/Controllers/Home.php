<?php

namespace App\Controllers;

use Config\App;

class Home extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();
        $dataEventModel = new \App\Models\EventModel();
        $dataEvent = $dataEventModel->findAll();

        $modelMitra = new \App\Models\MitraModel();
        $dataMitra = $modelMitra->findAll();

        return view('home', [
            'mitra' => $dataMitra,
            'user' => $user,
            'dataEvent' => array_reverse($dataEvent),
            'isDashboard' => isset($user) ? $user->can('admin.dashboard') : NULL,
        ]);
    }
}
