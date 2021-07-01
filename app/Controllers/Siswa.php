<?php
namespace App\Controllers;
use App\Models\SiswaModel;
class Siswa extends BaseController
{
    protected $siswaModel;
    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
    }

    public function dashboard(){
        return view('mazer/index');
    }
    
    public function index()
    {
        // cara konek db dengan model 
        $siswa = $this->siswaModel->findAll();
        $data = [
            'title' => 'Daftar Santri',
            'siswa' => $this->siswaModel->getSiswa()
        ];
        return view('siswa/index', $data);
    }

    public function detail($siswaid)
    {
        $data = [
            'title' => 'Detail Santri',
            'siswa' => $this->siswaModel->getSiswa($siswaid)
        ];

        // jika guru tdk ada di tabel
        if (empty($data['siswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama siswa ' . $siswaid . ' tidak ada');
        }

        return view('siswa/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Santri'
        ];
        return view('siswa/create', $data);
    }

    public function save()
    {
        $this->siswaModel->save([
            'nama' => $this->request->getVar('nama'),
            'angkatan' => $this->request->getVar('angkatan'),
            'kelas' => $this->request->getVar('kelas'),
            'nohp' => $this->request->getVar('nohp'),
            'alamat' => $this->request->getVar('alamat'),
            'jilid' => $this->request->getVar('jilid'),
            'tgl_mulai' => $this->request->getVar('tgl_mulai'),
            'tgl_selesai' => $this->request->getVar('tgl_selesai'),
            'ket' => $this->request->getVar('ket')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/siswa');
    }
}