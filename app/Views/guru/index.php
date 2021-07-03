<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <h3>Daftar Ustadz/dzah</h3>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="col">
                    <a href="/guru/create" class="btn btn-primary mb-3">Tambah Data Ustadz/dzah</a>

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
    </section>
</div>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="/assets/js/pages/dashboard.js"></script>
<?= $this->endSection() ?>