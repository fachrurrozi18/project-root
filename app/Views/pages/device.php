<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Device Name</th>
        <th scope="col">Merk</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; 
        foreach ($barang as $bar) :?>
            <tr>
            <th scope="row"><?= $counter++; ?></th>
            <td><img src="/img/<?=$bar['logo'] ?>" width="100"></td>
            <td><?= $bar['device_nama'] ?></td>
            <td><?= $bar['device_brand'] ?></td>
            <td><?= $bar['device_quantity'] ?></td>
            <td><?= $bar['device_status'] ?></td>
            <td><a href="/pages/device/<?=$bar['kunci'] ?>" class="btn btn-success">Detail</a> </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

<?= $this->endSection(); ?>