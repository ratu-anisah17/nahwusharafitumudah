<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h2 class="mt-2">Detail Siswa</h2>
            </center>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $siswa['nama']; ?></h5>
                    <h5 class="card-title">Angkatan : <?= $siswa['angkatan']; ?></h5>
                    <h5 class="card-title">Kelas : <?= $siswa['kelas']; ?></h5>
                    <h5 class="card-title">No HP : <?= $siswa['nohp']; ?></h5>
                    <h5 class="card-title">Alamat : <?= $siswa['alamat']; ?></h5>
                    <h5 class="card-title">Jilid : <?= $siswa['jilid']; ?></h5>
                    <h5 class="card-title">Tanggal Mulai : <?= $siswa['tgl_mulai']; ?></h5>
                    <h5 class="card-title">Tanggal Selesai : <?= $siswa['tgl_selesai']; ?></h5>
                    <h5 class="card-title">Keterangan : <?= $siswa['ket']; ?></h5>
                    <br></br>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
                </tbody>
                </table>
                <a href="/siswa" class="btn btn-primary mb-3">Kembali ke Daftar Siswa</a>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>