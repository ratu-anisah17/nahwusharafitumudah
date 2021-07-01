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

    public function dashboard(){
        return view('mazer/index');
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

        // jika guru tdk ada di tabel
        if (empty($data['guru'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama guru ' . $id . ' tidak ada');
        }

        return view('guru/detail', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Ustadz/dzah',
            'validation' => \Config\Services::validation()
        ];
        return view('guru/create', $data);
    }

    public function save()
    {
        // validasi input data
        if (!$this->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'kelas' => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/guru/create')->withInput()->with('validation', $validation);
        }

        $this->guruModel->save([
            'nama' => $this->request->getVar('nama'),
            'nohp' => $this->request->getVar('nohp'),
            'kelas' => $this->request->getVar('kelas')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/guru');
    }
}
