<?= $this->extend('template') ?>

<?= $this->section('main') ?>
    <div class="container">
        <h2 class="mb-5">Checkout</h2>
        <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="<?= base_url('images/harrypotter2.jpg'); ?>" alt="" style="width: 150px; height:auto;">
                        <h6>Harry Potter And The Goblet Of Fire</h6>
                    </td>
                    <td>
                        x1
                    </td>
                    <td>
                        Rp 300.000
                    </td>
                    <td>
                        Rp 300.000
                    </td>
                </tr>
            </tbody>
        </table>    
    </div>
    <h2 class="mb-5">Total: Rp 300.000</h2>
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