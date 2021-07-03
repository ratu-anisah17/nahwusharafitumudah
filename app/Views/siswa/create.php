<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content'); ?>
<h2 class="my-3">Form Tambah Data Santri</h2>
<div class="container">
    <div class="row">
        <div class="card col-md-8">
            <div class="card-body">
                <div>
                    <form action="/siswa/save" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="angkatan" id="angkatan">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kelas" id="kelas">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nohp" id="nohp">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="alamat" id="alamat">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jilid" class="col-sm-2 col-form-label">Jilid</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jilid" id="jilid">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_mulai" id="tgl_mulai">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tgl_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tgl_selesai" id="tgl_selesai">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <select name="ket" id="ket" class="form-control">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Tidak Lanjut">Tidak Lanjut</option>
                                </select>
                            </div>
                        </div>
                        <div>
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>