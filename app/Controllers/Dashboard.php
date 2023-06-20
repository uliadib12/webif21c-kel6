<?php

namespace App\Controllers;
use CodeIgniter\HTTP\URI;

class Dashboard extends BaseController
{
    private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function index()
    {
        $kategori_model = new \App\Models\CategoryModel();
        $jumlah_kategori = $kategori_model->countAllResults();

        $group_model = new \CodeIgniter\Shield\Models\GroupModel();
        $jumlah_admin = count($group_model->where('group', 'admin')->get()->getResultArray());
        $jumlah_user = count($group_model->where('group', 'user')->get()->getResultArray());

        $mitra_model = new \App\Models\MitraModel();
        $jumlah_mitra = $mitra_model->countAllResults();

        return view('dashboard', [
            'kategori' => 'dashboard',
            'user' => $this->user,
            'jumlah_user' => $jumlah_user,
            'jumlah_admin' => $jumlah_admin,
            'jumlah_kategori' => $jumlah_kategori,
            'jumlah_mitra' => $jumlah_mitra,
        ]);
    }
    public function dataMitra()
    {
        $maxPaginate = 5;

        $model = new \App\Models\MitraModel();
        $countAllRow = $model->countAllResults();

        $data = $model->orderBy('id_mitra', 'DESC')->paginate($maxPaginate);

        $page = request()->getVar('page');
        if ($page == null) {
            $page = 1;
        }

        // calculate number of page
        $pageCount = $countAllRow / $maxPaginate;
        // if page count is not integer, round up
        if (!is_int($pageCount)) {
            $pageCount = ceil($pageCount);
        }

        return view(
            'dashboard',
            [
                'kategori' => 'datamitra',
                'user' => $this->user,
                'page' => $page,
                'pageCount' => $pageCount,
                'data' => $data,
                'maxPaginate' => $maxPaginate,
                'countAllRow' => $countAllRow,
            ]
        );
    }

    public function pengingat_dataKegiatan()
    {
        $maxPaginate = 5;

        $model = new \App\Models\EventModel();
        $countAllRow = $model->countAllResults();

        $data = $model->orderBy('id_event', 'DESC')->paginate($maxPaginate);

        $page = request()->getVar('page');
        if ($page == null) {
            $page = 1;
        }

        // calculate number of page
        $pageCount = $countAllRow / $maxPaginate;
        // if page count is not integer, round up
        if (!is_int($pageCount)) {
            $pageCount = ceil($pageCount);
        }

        return view('dashboard', [
            'kategori' => 'dataKegiatan', 
            'user' => $this->user,
            'page' => $page,
            'pageCount' => $pageCount,
            'data' => $data,
            'maxPaginate' => $maxPaginate,
            'countAllRow' => $countAllRow,
        ]);
    }

    public function pengingat_penjadwalan()
    {
        $model = new \App\Models\CategoryModel();

        // get all event
        $eventModel = new \App\Models\EventModel();
        $event = $eventModel->findAll();

        $id_event = request()->getVar('event');

        if($id_event != null) {
            $event_pilih = $eventModel->find($id_event);
            $kategoriModel = new \App\Models\CategoryModel();
            $data = $kategoriModel->where('id_event', $event_pilih['id_event'])->orderBy('id', 'DESC')->findAll();
        }

        return view(
            'dashboard',
            [
                'kategori' => 'penjadwalan',
                'user' => $this->user,
                'data' => $data ?? null,
                'event' => $event ?? null,
                'event_pilih' => $event_pilih ?? null,
            ]
        );
    }
    public function kepanitiaan_panitia()
    {
        return view('dashboard', ['kategori' => 'panitia', 'user' => $this->user,]);
    }
    public function kepanitiaan_sk()
    {
        return view('dashboard', ['kategori' => 'sk', 'user' => $this->user,]);
    }

    public function chart_desainWeb()
    {
        return view('dashboard', ['kategori' => 'desainWeb', 'user' => $this->user,]);
    }
    public function chart_pemrogramanMobile()
    {
        return view('dashboard', ['kategori' => 'pemrogramanMobile', 'user' => $this->user,]);
    }
    public function chart_uiUx()
    {
        return view('dashboard', ['kategori' => 'uiUx', 'user' => $this->user,]);
    }
    public function chart_ctf()
    {
        return view('dashboard', ['kategori' => 'ctf', 'user' => $this->user,]);
    }
}
