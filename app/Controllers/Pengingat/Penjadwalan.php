<?php

namespace App\Controllers\Pengingat;

use App\Controllers\BaseController;
use App\Models\CategoryModel;

class Penjadwalan extends BaseController
{
   public function addData(){
        // check database connection
        if(! db_connect()){
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $kategoriModel = new CategoryModel();

        // get post data
        $data = $this->getPostData();

        if(! $kategoriModel->insert($data)){
            return redirect()->back()->withInput()->with('errors', $kategoriModel->errors());
        }

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
   }

    public function editData(){
        // check database connection
        if(! db_connect()){
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $kategoriModel = new CategoryModel();

        // get post data
        $id = request()->getPost('id');
        $data = $this->getPostData();

        if(! $kategoriModel->update($id, $data)){
            return redirect()->back()->withInput()->with('errors', $kategoriModel->errors());
        }

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function deleteData(){
        // check database connection
        if(! db_connect()){
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $kategoriModel = new CategoryModel();

        // get post data
        $id = request()->getPost('id');

        if(! $kategoriModel->delete($id)){
            return redirect()->back()->withInput()->with('errors', $kategoriModel->errors());
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    private function getPostData(){
        $data = [
            'kategori' => request()->getPost('kategori'),
            'pendaftaran' => request()->getPost('pendaftaran'),
            'jamAwalPendaftaran' => request()->getPost('jamAwalPendaftaran'),
            'jamAkhirPendaftaran' => request()->getPost('jamAkhirPendaftaran'),
            'penyisihan' => request()->getPost('penyisihan'),
            'jamAwalPenyisihan' => request()->getPost('jamAwalPenyisihan'),
            'jamAkhirPenyisihan' => request()->getPost('jamAkhirPenyisihan'),
            'pengumuman' => request()->getPost('pengumuman'),
            'final' => request()->getPost('final')
        ];

        return $data;
    }
}
