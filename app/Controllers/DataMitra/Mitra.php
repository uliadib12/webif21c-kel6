<?php

namespace App\Controllers\DataMitra;

use App\Controllers\BaseController;
use App\Models\MitraModel;

class Mitra extends BaseController
{
    public function addData()
    {
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $mitraModel = new MitraModel();

        // get post data
        $data = $this->getPostData();

        if (!$mitraModel->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $mitraModel->errors());
        }

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function editData()
    {
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $mitraModel = new MitraModel();

        // get post data
        $id = request()->getPost('id_mitra');
        $data = $this->getPostData();

        if (!$mitraModel->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $mitraModel->errors());
        }

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function deleteData()
    {
        // check database connection
        if (!db_connect()) {
            return redirect()->back()->withInput()->with('errors', 'Database connection error');
        }

        $mitraModel = new MitraModel();

        // get post data
        $id = request()->getPost('id_mitra');

        // looping id
        foreach ($id as $i) {
            if (!$mitraModel->delete($i)) {
                return redirect()->back()->withInput()->with('errors', $mitraModel->errors());
            }
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    private function getPostData()
    {
        $data = [
            'logo' => request()->getPost('logo'),
            'nama' => request()->getPost('nama'),
            'no_telp' => request()->getPost('no_telp'),
            'email' => request()->getPost('email'),
            'pendanaan' => request()->getPost('pendanaan')
        ];

        return $data;
    }
}
