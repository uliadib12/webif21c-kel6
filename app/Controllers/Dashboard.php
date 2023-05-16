<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard', ['kategori' => 'dashboard']);
    }
    public function dataMitra()
    {
        return view('dashboard', ['kategori' => 'datamitra']);
    }

    public function pengingat_penjadwalan()
    {
        return view('dashboard', ['kategori' => 'penjadwalan']);
    }
    public function pengingat_dataKegiatan()
    {
        return view('dashboard', ['kategori' => 'dataKegiatan']);
    }
}
