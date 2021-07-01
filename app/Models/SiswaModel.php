<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'siswaid';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'angkatan', 'kelas', 'nohp', 'alamat', 'jilid', 'tgl_mulai', 'tgl_selesai','ket'];

    public function getSiswa($siswaid = false)
    {
        if ($siswaid == false) {
            return $this->findAll();
        }

        return $this->where(['siswaid' => $siswaid])->first();
    }
}