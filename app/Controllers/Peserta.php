<?php

namespace App\Controllers;

use App\Models\PesertaKategoriModel;

class Peserta extends BaseController
{
    public function daftarLomba()
    {
        $id_kategori = $this->request->getUri()->getSegment(2);
        $model = new PesertaKategoriModel();

        // check if user already registered
        $data = [
            'id_kategori' => $id_kategori,
            'id_user' => auth()->id(),
        ];
        if($model->where($data)->first() != null) {
            return $this->response->setJSON(['message' => 'Anda sudah terdaftar di kategori ini'])->setStatusCode(400);
        }

        $data = [
            'id_kategori' => $id_kategori,
            'id_user' => auth()->id(),
            'created_at' => date('Y-m-d H:i:s'),
        ];
        if($model->insert($data)){
            return $this->response->setJSON(['message' => 'Berhasil Daftar Kategori']);
        }
        else{
            return $this->response->setJSON(['message' => 'Gagal Daftar Kategori'])->setStatusCode(400);
        }
    }

    public function deleteDaftarKategori(){
        $id_kategori = $this->request->getUri()->getSegment(2);
        $model = new PesertaKategoriModel();

        // check if data not exist
        $data = [
            'id_kategori' => $id_kategori,
            'id_user' => auth()->id(),
        ];
        if($model->where($data)->first() == null) {
            return $this->response->setJSON(['message' => 'Data tidak ditemukan'])->setStatusCode(400);
        }

        $data = [
            'id_kategori' => $id_kategori,
            'id_user' => auth()->id(),
        ];
        if($model->where($data)->delete()){
            return $this->response->setJSON(['message' => 'Berhasil Hapus Kategori' ]);
        }
        else{
            return $this->response->setJSON(['message' => 'Gagal Hapus Kategori' ])->setStatusCode(400);
        }
}
}
