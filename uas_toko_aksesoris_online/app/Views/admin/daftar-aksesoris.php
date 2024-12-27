<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>
<div class="container">
        <h1>Daftar Produk Aksesoris</h1>

        <?php if(isset($_SESSION['berhasil'])): ?>

        <div class="alert alert-success mb-3">
            <strong>Success!</strong> <?= $_SESSION['berhasil'] ?>
        </div>

        <?php
          // unset($_SESSION['berhasil']); //Menghapus Session Berhasil
          endif;
        ?>

        <?php if(isset($_SESSION['error'])): ?>

        <div class="alert alert-danger mb-3">
             <strong>Failed!</strong> <?= $_SESSION['error'] ?>
        </div>

        <?php
          unset($_SESSION['error']);
          endif;
        ?>


        <div class="my-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class= "bi-plus-circle-fill"></i>Tambah</button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Ketersediaan Stok</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($aksesoriss as $aksesoris): ?>
                            <tr>
                                <th scope="row"><?= $aksesoris['id']?></th>
                                <td><?= $aksesoris['nama']?></td>
                                <td><?= $aksesoris['jumlah']?></td>
                                <td><?= $aksesoris['deskripsi']?></td>
                                <td><?= $aksesoris['ketersediaan']?></td>
                                <td><?= $aksesoris['kategori']?></td>
                                <td>
                                    <img src="<?= base_url($aksesoris['gambar']) ?>" alt="" style="width: 150px; height: auto;">
                                </td>
                                <td><?= $aksesoris['harga']?></td>
                                <td>
                                <a href="<?= base_url('admin/daftar-aksesoris/edit')?>" class="btn btn-success">Edit</a>
                                <a href="<?= base_url('admin/daftar-aksesoris/hapus')?>" class="btn btn-danger">Hapus</a>
                              </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Aksesoris</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/daftar-aksesoris')?>" id="formTambah" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label for="jumlah">Jumlah</label>
                <input type="text" name="jumlah" id="jumlah" class="form-control">
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control">
            </div>

            <div class="mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ketersediaan">Ketersediaan Stok</label>
                <input type="text" name="ketersediaan" id="ketersediaan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" accept="image/*" class="form-control">
            </div>
            <div class="mb-3">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formTambah" class="btn btn-primary"><i class="bi bi-floppy"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusModalLabel">Konfirmasi Hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="/index.php/aksesoris/hapus" id="formHapus" method="POST">
            <input type="hidden" name="id_hapus" id="hidden_id">
        </form>
        
        <p>Apakah Anda Yakin Ingin Menghapus Data Dengan Id <span id="text_id">...</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formHapus" class="btn btn-danger"> <i class="bi bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const hapusModal = document.getElementById('hapusModal')
if (hapusModal) {
  hapusModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const hidden_id = hapusModal.querySelector('#hidden_id')
    const text_id =hapusModal.querySelector('#text_id')

    hidden_id.value = id;
    text_id.textContent = id;
  })
}
    </script>

<?= $this->endSection();?>