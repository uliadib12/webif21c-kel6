<?php

namespace App\Controllers;

use Config\App;

class EventPage extends BaseController
{
    public function index()
    {
        $user = service('auth')->user();

        $eventModel = new \App\Models\EventModel();
        $event = $eventModel->find($this->request->getUri()->getSegment(2));

        $kategoriModel = new \App\Models\CategoryModel();
        $kategori = $kategoriModel->where('id_event', $event['id_event'])->findAll();

        // ProfileModel
        $profileModel = new \App\Models\ProfileModel();
        $profile = $profileModel->where('id_user', $user->id)->first();

        return view('Home/page', [
            'user' => $user,
            'event' => $event,
            'kategori' => $kategori,
            'profile' => $profile ?? null,
        ]);
    }
}
