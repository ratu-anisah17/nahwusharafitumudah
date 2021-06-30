<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Ustadz/dzah</h2>
            <form action="/guru/save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelas" name="kelas" autofocus>
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
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>