<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./bootstrap-dist/fontawesome-free/css/all.css">
      <link rel="stylesheet" href="style.css">
      <title>Agence de logement </title>
</head>

<body>
<?php require('headerX.php'); ?>


      <div class="m-3 carousel slide" data-bs-ride="carousel" id="option">
            <div class="carousel-indicators">
                  <button type="button" data-bs-target="#option" data-bs-slide-to="0"></button>
                  <button type="button" data-bs-target="#option" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#option" data-bs-slide-to="2"></button>
                  <button type="button" data-bs-target="#option" data-bs-slide-to="3"></button>
                  <button type="button" data-bs-target="#option" data-bs-slide-to="4"></button>
            </div>
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <img src="./font/27.jpg" alt="" width="100%" style="height: 500px;" aria-hidden="true">
                        <div class="carousel-caption">
                              <h3>Choisir la maison de ses reves</h3>
                        </div>
                  </div>

                  <div class="carousel-item">
                        <img src="./font/19.jpg" alt="" width="100%" style="height: 500px;">
                        <div class="carousel-caption">
                              <h3>Choisir la maison de ses reves</h3>
                        </div>
                  </div>

                  <div class="carousel-item">
                        <img src="./font/11.jpg" alt="" width="100%" style="height: 500px;">
                        <div class="carousel-caption">
                              <h3>Choisir la maison de ses reves</h3>
                        </div>
                  </div>

                  <div class="carousel-item">
                        <img src="./font/13.jpg" alt="" width="100%" style="height: 500px;">
                        <div class="carousel-caption">
                              <h3>Choisir la maison de ses reves</h3>
                        </div>
                  </div>

                  <div class="carousel-item">
                        <img src="./font/28.jpg" alt="" width="100%" style="height: 500px;">
                        <div class="carousel-caption">
                              <h3>Choisir la maison de ses reves</h3>
                        </div>
                  </div>
            </div>

            <button type="button" class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#option">
                  <span class="carousel-control-prev-icon"></span>
            </button>
            <button type="button" class="carousel-control-next" data-bs-slide="next" data-bs-target="#option">
                  <span class="carousel-control-next-icon"></span>
            </button>

      </div>

      <?php require('footer.php'); ?>

      <div class="card-footer m-3">

      </div>
      <div class="text-center text-light foot pb-2">
            @copyright
      </div>
      <script src="./bootstrap-dist/js/bootstrap.min.js"></script>
      <script src="./bootstrap-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
