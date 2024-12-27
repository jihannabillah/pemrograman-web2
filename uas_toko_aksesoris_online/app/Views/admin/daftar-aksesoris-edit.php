<?= $this->extend('admin/template') ?>
<?= $this->section('main') ?>
<h2 class="mb-5">Edit Aksesoris</h2>
<form action="<?= base_url('admin/daftar-aksesoris-edit') ?>" method="post" enctype="multipart/form-data">
<button type="submit">Submit</button>
</form>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Produk</label>
        <input type="text" class="form-control w-50" id="nama"
            placeholder="nama" name="nama" value="<?= $aksesoris['nama']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $aksesoris['jumlah']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $aksesoris['deskripsi']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $aksesoris['kategori']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="ketersediaan" class="form-label">Ketersediaan Stok</label>
        <input type="text" class="form-control" id="ketersediaan" name="ketersediaan" value="<?= $aksesoris['ketersediaan']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        <small>Gambar saat ini: <?= $aksesoris['gambar']; ?></small>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" value="<?= $aksesoris['harga']; ?>"
            autocomplete="off" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Ubah</button>
    </div>
</form>
<?= $this->endSection() ?>
