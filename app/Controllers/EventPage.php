<?php

namespace App\Controllers;

use Config\App;

class EventPage extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();
        $dataEventModel = new \App\Models\EventModel();
        $dataEvent = $dataEventModel->findAll();
        return view('Home/page', [
            'user' => $user,
            'dataEvent' => array_reverse($dataEvent),
            'isDashboard' => isset($user) ? $user->can('admin.dashboard') : NULL,
        ]);
    }
}
