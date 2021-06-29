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
            'guru' => $guru
        ];

        return view('guru/index', $data);
    }
}
