<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3"> Form Tambah Data Komik</h2>
            <form action="/komik/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <!-- crros side resource forgery -->
                <!--untuk menjaga agar formnya hanya diinput lewat halaman ini saja, biar ga dibajak bro -->

                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" placeholder="Judul " name="judul" autofocus value="<?= old('judul'); ?>">
                        <!-- value old digunakan agar data yg sebelumnya ditulis tidak hilang -->
                        <div class="invalid-feedback"> <?= $validation->getError('judul'); ?></div>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" placeholder="Penulis " name="penulis" value="<?= old('penulis'); ?>">

                        <div class="invalid-feedback"> <?= $validation->getError('penulis'); ?></div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" placeholder="Penerbit " name="penerbit" value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback"> <?= $validation->getError('penerbit'); ?></div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="Sampul">Upload</label>
                            <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div class="invalid-feedback"> <?= $validation->getError('sampul'); ?></div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>