<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card" style="width: 25rem;">
        <img src="/img/<?= $barang['logo'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $barang['device_nama'] ?></h5>
            <p class="card-text"><?= $barang['device_brand'] ?></p>
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>