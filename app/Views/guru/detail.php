<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Detail Ustadz/dzah</h2>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $guru['nama']; ?></h5>
                    <h5 class="card-title">No HP : <?= $guru['nohp']; ?></h5>
                    <h5 class="card-title">Kelas yang dipegang : <?= $guru['kelas']; ?></h5>
                    <br></br>
                    <a href="/guru/edit/<?= $guru['id']; ?>" class="btn btn-warning">Edit</a>


                    <form action="/guru/<?= $guru['id']; ?>" method="POST" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</button>
                    </form>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Santri yang dipegang</h4>
                </div>
                <div class="card-body">
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
                </div>
            </div>
            <a href="/guru">Kembali ke daftar Ustadz/dzah</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>