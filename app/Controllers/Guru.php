<?php

namespace App\Controllers;

use App\Models\GuruModel;

class Guru extends BaseController
{
    protected $guruModel;

    public function __construct()
    {
        $this->guruModel = new GuruModel();
    }
    public function index()
    {
        // cara konek db dengan model 
        $guru = $this->guruModel->findAll();

        $data = [
            'title' => 'Daftar Guru',
            'guru' => $this->guruModel->getGuru()
        ];

        return view('guru/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Ustadz/ah',
            'guru' => $this->guruModel->getGuru($id)
        ];
        return view('guru/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Ustadz/dzah'
        ];
        return view('guru/create', $data);
    }
}
