<?php

namespace App\Controllers\Event;

use App\Controllers\BaseController;
use App\Models\EventModel;

class Kegiatan extends BaseController
{
    public function addData(){
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $data = $this->getPostData();

        // upload image
        $this->uploadImage('banner','gambar_banner',$data);
        $this->uploadImage('poster','gambar_poster',$data);

        $kegiatanModel = new EventModel();

        if (!$kegiatanModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $kegiatanModel->errors());
        }

        return redirect()->back()->with('success', "Data berhasil ditambahkan");
    }

    public function editData(){
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }
        
        $id = request()->getPost('id');
        $data = $this->getPostData();

        // upload image
        $this->uploadImage('banner','gambar_banner',$data);
        $this->uploadImage('poster','gambar_poster',$data);

        $kegiatanModel = new EventModel();

        $kegiatan = $kegiatanModel->find($id);
        if ($kegiatan == null) {
            return redirect()->back()->withInput()->with('errors', 'Data tidak ditemukan');
        }

        if (!$kegiatanModel->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $kegiatanModel->errors());
        }

        return redirect()->back()->with('success', "Data berhasil diubah");
    }

    public function deleteData(){
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $id = request()->getPost('id');

        $kegiatanModel = new EventModel();

        // looping id
        foreach ($id as $i) {
            if (!$kegiatanModel->delete($i)) {
                return redirect()->back()->withInput()->with('errors', $kegiatanModel->errors());
            }
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    private function getPostData()
    {
        $data = [
            'nama' => request()->getPost('nama'),
            'keterangan' => request()->getPost('informasi'),
            'tanggal' => request()->getPost('tanggal'),
            'tempat' => request()->getPost('tempat'),
            'penanggung_jawab' => request()->getPost('penanggung_jawab'),
        ];

        return $data;
    }

    private function uploadImage($post_name,$db_name,&$data){
        $img = $this->request->getFile($post_name);
        if (!$img->isValid() || !in_array($img->getExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            return redirect()->back()->withInput()->with('errors', 'Logo harus berupa gambar.');
        }
        $rand_name = $img->getRandomName();
        if ($img->isValid() && ! $img->hasMoved()) {
            $img->move(ROOTPATH . 'public/uploads/images/', $rand_name);
            $data[$db_name] = $rand_name;
        }
        else {
            return redirect()->back()->withInput()->with('errors', $img->getErrorString());
        }
    }
}
