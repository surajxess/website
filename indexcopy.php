<?php
include 'header.php';
?>

<div class="container-fluid">
  <header
    class="d-flex flex-wrap align-items-stretch justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-stretch col-md-3 mb-2 mb-md-0 text-dark text-decoration-none logo">


    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Watches</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Smart Watches</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Reflex Tunes</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Sale</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Giftings</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">More</a></li>
    </ul>

    <div class=" nav col-md-3 text-end justify-content-center ">
      <ul class="d-flex list-unstyled align-items-center m-0 ">
        <li class="me-4"><a href="nav-link px-2 link-dark"><i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li class="me-4"><a href="nav-link px-2 link-dark"><i class="fa-solid fa-user"></i></a></li>
        <li class="me-4"><a href="nav-link px-2 link-dark"><i class="fa-regular fa-heart"></i></a></li>
        <li class="me-4"><a href="nav-link px-2 link-dark"><i class="fa-solid fa-bag-shopping"></i></a></li>
        <li class="me-4"><a href="nav-link px-2 link-dark"><i class="fa-solid fa-cube"></i></a></li>
      </ul>
    </div>
  </header>

  <!-- Carousel Slider Hero -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/images/hero-1.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




</div>






<?php
include 'footer.php';
?>