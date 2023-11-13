<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= BASEURL ?>/img/banner1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= BASEURL ?>/img/banner2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= BASEURL ?>/img/banner3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="d-flex mt-4 mb-2 ml-3">
  <h3 class="text-center p-2" style="color:white; background-color:blue; width:18%; border-radius:10px;">Produk Paling Laku</h3>
</div>

<div class="ticket">
  <?php foreach ($data['product'] as $row) : ?>
    <a href="<?= BASEURL ?>/product/buy/<?= $row['id']; ?>">
      <div class="centers">
        <div class="article-card">
          <div class="content">
            <p>Rp. <?= $row['harga']; ?></p>
            <a href="#"> <?= $row['nama']; ?></a>
          </div>
          <img src="<?= BASEURL ?><?= $row['image']; ?>" alt="" class="img-fluid">
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<hr>

<div class="d-flex mt-4 mb-2 ml-3">
  <h3 class="text-center p-2" style="color:white; background-color:blue; width:18%; border-radius:10px;">Kategori Produk</h3>
</div>

<?php foreach ($data['category'] as $row) : ?>
    <a href="<?= BASEURL ?>/product/buy/<?= $row['id']; ?>">
      <div class="centers">
        <div class="article-card">
          <div class="content">
            <a href="#"> <?= $row['category']; ?></a>
          </div>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<hr>