<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Ustadz/dzah</h1>
            <a href="/guru/create" class="btn btn-primary mb-3">Tambah Data Ustadz/dzah</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($guru as $g) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $g['nama']; ?></td>
                            <td><?= $g['nohp']; ?></td>
                            <td><?= $g['kelas']; ?></td>
                            <td>
                                <a href="/guru/<?= $g['id']; ?>" type="button" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>