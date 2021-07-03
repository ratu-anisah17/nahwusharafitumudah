<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content'); ?>

<div class="page-heading">
    <h2>Form Ubah Data Ustadz/dzah</h2>
</div>

<div class="container">
    <div class="row">
        <div class="card col-md-5">
            <div class="card-body">
                <div>
                    <form action="/guru/update/<?= $guru['id']; ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= (old('nama')) ? old('nama') : $guru['nama'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('nohp')) ? 'is-invalid' : ''; ?>" id="nohp" name="nohp" value="<?= (old('nohp')) ? old('nohp') : $guru['nohp'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nohp'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control <?= ($validation->hasError('kelas')) ? 'is-invalid' : ''; ?>" id="kelas" name="kelas" value="<?= (old('kelas')) ? old('kelas') : $guru['kelas'] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('kelas'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Kelas</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tele" id="tele" value="Telegram">
                            <label class="form-check-label" for="tele">
                                Telegram
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="wa1" id="wa1" value="WhatsApp (1 Minggu)">
                            <label class="form-check-label" for="wa1">
                                WhatsApp (1 Minggu)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="wa2" id="wa2" value="WhatsApp (2 Minggu)">
                            <label class="form-check-label" for="wa2">
                                WhatsApp (2 Minggu)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="private" id="private" value="Private">
                            <label class="form-check-label" for="private">
                                Private
                            </label>
                        </div>
                    </div>
                </fieldset> -->
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>