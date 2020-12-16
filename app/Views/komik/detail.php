<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h2 class="mt-2">Detail Komik</h2>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title"><?= $komik['judul']; ?></h3>
                    <p class="card-text"><b>Penulis : </b> <?= $komik['penulis']; ?></p>
                    <p class="card-text"><b>Penerbit : </b><?= $komik['penerbit']; ?></p>

                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                    <form action="/komik/delete/<?= $komik['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                    </form>
                    <br><br>
                    <a href="/komik">Kembali ke daftar komik</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>