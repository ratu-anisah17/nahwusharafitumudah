<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Ustadz/ah</h2>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $guru['nama']; ?></h5>
                    <h5 class="card-title">No HP : <?= $guru['nohp']; ?></h5>
                    <h5 class="card-title">Kelas yang dipegang : <?= $guru['kelas']; ?></h5>

                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <br></br>
                    <a href="/guru">Kembali ke daftar Ustadz/dzah</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>