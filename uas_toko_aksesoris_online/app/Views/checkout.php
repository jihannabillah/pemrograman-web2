<?= $this->extend('template') ?>

<?= $this->section('main') ?>
    <div class="container">
        <h2 class="mb-5">Checkout</h2>
        <div class="mb-3">
        <table class="table table-stripped">
            <thead>
            <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Ketersediaan Stok</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/Kalung Mutiara.jpeg'); ?>" alt="" style="width: 150px; height:auto;">
                        <h6>Kalung Mutiara</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Kalung Mutiara Berkualitas Tinggi Dengan Kilau Alami
                    </td>
                    <td>
                        Rp 500.000
                    </td>
                    <td>
                        Tersedia
                    </td>
                    <td>
                        Kalung
                    </td>
                    <td>
                        <a href="<?= base_url('cart/delete')?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
    <h2 class="mb-5">Total: Rp 500.000</h2>
    <h2 class="mb-3">Data Pembeli</h2>
    <div class="mb-5">
        Draco Malfoy <br />
        089732450197 <br />
        malfoy.006@gmail.com
    </div>
    <h2 class="mb-3">Alamat Pengiriman</h2>
    <div class="mb-5">
        <span>Jl. Haji Kamil, Jambi Selatan, Kota Jambi.</span>
    </div>
    <h2 class="mb-3">Metode Pembayaran</h2>
    <div class="mb-5">
        Transfer Bank <br />
        BRI, Jihan Nabillah <br />
        563401011632501
    </div>
    <div class="mb-5">
        <a href="<?= base_url('submit')?>" class="btn btn-primary">Submit</a>
    </div>
</div>

<?= $this->endSection() ?>