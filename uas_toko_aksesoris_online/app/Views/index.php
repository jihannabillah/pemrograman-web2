<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container p-5 bg-light text-dark rounded-bottom-3">
    <h1>Selamat Datang di Toko Aksesoris Online</h1>
    <h5>Temukan Koleksi Aksesoris Terbaik Untuk Melengkapi Gaya Anda.</h5>
    <a href="<?= base_url() ?>" class="btn btn-dark">Lihat Produk</a>
</div>

<div class="container mb-5">
    <h2 class="mt-5">Aksesoris Best Seller</h2>
    <div class="row gy-3">
        <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Kalung Mutiara.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kalung Mutiara</h5>
            <p class="card-text">Rp 500.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Anting Berlian.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Anting Berlian</h5>
            <p class="card-text">Rp 3.000.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Bando Permata.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bando Permata</h5>
            <p class="card-text">Rp 200.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Bros Vintage.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bros Vintage</h5>
            <p class="card-text">Rp 500.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Cincin Couple.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Cincin Couple</h5>
            <p class="card-text">Rp 500.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Gelang Perak.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gelang Perak</h5>
            <p class="card-text">Rp 500.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Kacamata Aesthetic.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kacamata Aesthetic</h5>
            <p class="card-text">Rp 250.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url('images/Syal Satin Motif Bunga.jpeg')?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Syal Satin Motif Bunga</h5>
            <p class="card-text">Rp 300.000</p>
            <a href="#" class="btn btn-dark">Add to cart</a>
          </div>
        </div>
    </div>
    </div>
    </div>
<?= $this->endSection()?>        