<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-4 text-gray-800">Detail Kamar</h1>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <!-- gambar -->
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $kamar['jenis_kamar']; ?></h5>
                            <p class="card-text"><b>Harga :</b> <?= $kamar['harga']; ?></p>
                            <a href="/kamar/edit/<?= $kamar['slug']; ?>" class="btn btn-warning">Edit</a>
                            <form action="/kamar/<?= $kamar['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</button>
                            </form>
                            <br><br>
                            <small><a href="/kamar">&laquo; kembali ke daftar kamar</a></small>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>