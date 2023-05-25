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

        // upload image
        $img = $this->request->getFile('logo');
        if (!$img->isValid() || !in_array($img->getExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            return redirect()->back()->withInput()->with('errors', 'Logo harus berupa gambar.');
        }
        $rand_name = $img->getRandomName();
        if ($img->isValid() && ! $img->hasMoved()) {
            $img->move(ROOTPATH . 'public/uploads/images/', $rand_name);
            $data['logo'] = $rand_name;
        }
        else {
            return redirect()->back()->withInput()->with('errors', $img->getErrorString());
        }

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

        // delete image
        $image_delete = $mitraModel->find($id[0]);
        if (file_exists(ROOTPATH . 'public/uploads/images/' . $image_delete['logo'])) {
            unlink(ROOTPATH . 'public/uploads/images/' . $image_delete['logo']);
        }

        // upload image
        $img = $this->request->getFile('logo');
        if (!$img->isValid() || !in_array($img->getExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
            return redirect()->back()->withInput()->with('errors', 'Logo harus berupa gambar.');
        }
        $rand_name = $img->getRandomName();
        if ($img->isValid() && ! $img->hasMoved()) {
            $img->move(ROOTPATH . 'public/uploads/images/', $rand_name);
            $data['logo'] = $rand_name;
        }
        else {
            return redirect()->back()->withInput()->with('errors', $img->getErrorString());
        }

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
            $image_delete = $mitraModel->find($i);
            if (file_exists(ROOTPATH . 'public/uploads/images/' . $image_delete['logo'])) {
                unlink(ROOTPATH . 'public/uploads/images/' . $image_delete['logo']);
            }
            if (!$mitraModel->delete($i)) {
                return redirect()->back()->withInput()->with('errors', $mitraModel->errors());
            }
        }

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    private function getPostData()
    {
        $data = [
            'nama' => request()->getPost('nama'),
            'no_telp' => request()->getPost('no_telp'),
            'email' => request()->getPost('email'),
            'pendanaan' => request()->getPost('pendanaan')
        ];

        return $data;
    }
}
