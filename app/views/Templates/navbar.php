<nav class="navbar">
  <div class="content">
    <div class="logo">
      <a href="<?= BASEURL ?>">TOSEMSA</a>
    </div>
    <ul class="menu-list">
      <div class="icon cancel-btn">
        <i class="fas fa-times"></i>
      </div>
      <li class="link-list"><a href="<?= BASEURL ?>" class="nav-list">Home</a></li>
      <li class="link-list"><a href="<?= BASEURL ?>" class="nav-list">About</a></li>
      <li class="link-list">
        <div class="dropdown show">
          <a class="dropdown-toggle nav-list" href="<?= BASEURL ?>/services" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="<?= BASEURL ?>">Vegetable</a>
            <a class="dropdown-item" href="<?= BASEURL ?>">Fruit</a>
          </div>
        </div>
      </li>
      <li>
        <div class="input-group bx-5 nav-list">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
        </div>
      </li>
      <li>
        <a name="" id="" class="btn btn-primary nav-list-end" href="#" role="button">
          <i class="bi bi-person-fill"></i>
        </a>

      </li>
    </ul>
    <div class="icon menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>