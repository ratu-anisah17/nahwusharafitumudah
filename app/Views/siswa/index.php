<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Santri</h1>
            <a href="/siswa/create" class="btn btn-primary mb-3">Tambah Data Santri</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Nomor HP</th>
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
                            <td><?= $s['nohp']; ?></td>
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
<?= $this->endSection(); ?>