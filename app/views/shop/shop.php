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

<div class="top mt-3 ml-3">
  <div class="d-flex mt-3 mb-3 ml-3">
    <h5 class="text-center p-2" style="color:white; background-color:blue; width:10%; border-radius:10px;">Products</h5>
  </div>
  <div class="list-products">
    <?php foreach ($data['product'] as $row) : ?>
      <div class="cards ml-3">
        <div class="img">
          <img src="<?= BASEURL ?><?= $row['image']; ?>" alt="" class="img-fluid">
        </div>
        <div class="title d-flex">
          <a href="#"> <?= $row['nama']; ?></a>
          <p>Rp. <?= $row['harga']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <br><br><br><br><br>
</div>