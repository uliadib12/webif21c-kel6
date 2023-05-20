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
        $model = new \App\Models\CategoryModel();

        $data = $model->paginate(5);

        return view('dashboard', ['kategori' => 'penjadwalan', 'data' => $data]);
    }
    public function pengingat_dataKegiatan()
    {
        return view('dashboard', ['kategori' => 'dataKegiatan']);
    }
    public function kepanitiaan_panitia()
    {
        return view('dashboard', ['kategori' => 'panitia']);
    }

    public function chart_desainWeb()
    {
        return view('dashboard', ['kategori' => 'desainWeb']);
    }
    public function chart_pemrogramanMobile()
    {
        return view('dashboard', ['kategori' => 'pemrogramanMobile']);
    }
    public function chart_uiUx()
    {
        return view('dashboard', ['kategori' => 'uiUx']);
    }
    public function chart_ctf()
    {
        return view('dashboard', ['kategori' => 'ctf']);
    }
}
