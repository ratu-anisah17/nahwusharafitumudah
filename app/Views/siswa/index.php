<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content'); ?>
<div class="page-heading">
    <h2>Daftar Santri</h2>
</div>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <a href="/siswa/create" class="btn btn-primary mb-3">Tambah Data Santri</a>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-info" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Angkatan</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Nomor HP</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jilid</th>
                                <th scope="col">Tgl Mulai</th>
                                <th scope="col">Tgl Selesai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($siswa as $s) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $s['nama']; ?></td>
                                    <td><?= $s['angkatan']; ?></td>
                                    <td><?= $s['kelas']; ?></td>
                                    <td><?= $s['nohp']; ?></td>
                                    <td><?= $s['alamat']; ?></td>
                                    <td><?= $s['jilid']; ?></td>
                                    <td><?= $s['tgl_mulai']; ?></td>
                                    <td><?= $s['tgl_selesai']; ?></td>
                                    <td><?= $s['ket']; ?></td>
                                    <td>
                                        <a href="/siswa/detail/<?= $s['siswaid']; ?>" type="button" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>