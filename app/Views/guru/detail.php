<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <center>
                <h2 class="mt-2">Detail Ustadz/dzah</h2>
            </center>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $guru['nama']; ?></h5>
                    <h5 class="card-title">No HP : <?= $guru['nohp']; ?></h5>
                    <h5 class="card-title">Kelas yang dipegang : <?= $guru['kelas']; ?></h5>
                    <br></br>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
            <h4 class="mt-5">Santri yang dipegang</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Jilid</th>
                        <th scope="col">Tgl Mulai</th>
                        <th scope="col">Tgl Selesai</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($guru as $g) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/guru">Kembali ke daftar Ustadz/dzah</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>