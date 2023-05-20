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
        $maxPaginate = 5;

        $model = new \App\Models\CategoryModel();
        $countAllRow = $model->countAll();

        $data = $model->paginate(5);

        $page = request()->getVar('page');
        if($page == null){
            $page = 1;
        }

        // calculate number of page
        $pageCount = $countAllRow / $maxPaginate;
        // if page count is not integer, round up
        if (!is_int($pageCount)) {
            $pageCount = ceil($pageCount);
        }
        
        return view('dashboard', 
        [
            'kategori' => 'penjadwalan',
            'page' => $page, 
            'pageCount' => $pageCount,
            'data' => $data,
            'maxPaginate' => $maxPaginate,
            'countAllRow' => $countAllRow
        ]
    );
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
