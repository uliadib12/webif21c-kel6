<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController
{
    public function index()
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        return view('index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('add_category');
    }

    public function store()
    {
        $categoryModel = new CategoryModel();
        $data = [
            'kategori' => $this->request->getPost('kategori'),
            'pendaftaran' => $this->request->getPost('pendaftaran'),
            'jamAwalPendaftaran' => $this->request->getPost('jamAwalPendaftaran'),
            'jamAkhirPendaftaran' => $this->request->getPost('jamAkhirPendaftaran'),
            'penyisihan' => $this->request->getPost('penyisihan'),
            'jamAwalPenyisihan' => $this->request->getPost('jamAwalPenyisihan'),
            'jamAkhirPenyisihan' => $this->request->getPost('jamAkhirPenyisihan'),
            'pengumuman' => $this->request->getPost('pengumuman'),
            'final' => $this->request->getPost('final')
        ];

        $categoryModel->insert($data);

        return redirect()->to('/')->with('success', 'Category added successfully');
    }

    public function delete($id)
    {
        $categoryModel = new CategoryModel();
        $categoryModel->delete($id);

        return redirect()->to('/')->with('success', 'Category deleted successfully');
    }
}
