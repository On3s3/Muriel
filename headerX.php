<?php include('bd.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <title>Locataire</title>
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-info  bg-dar text-light  $zindex-sidenav-backdrop: 900;">
            <div class="container px-5">
                  <a class="navbar-brand text-light h3 lg" href="#!">pacelaIMMOB.</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                              <li class="nav-item "><a class="nav-link text-light h5" aria-current="page" href="liste_apartement.php">Appartements</a></li>
                              <li class="nav-item "><a class="nav-link text-light h5" aria-current="page" href="liste_locataire.php">Locataires</a></li>
                              <li class="nav-item "><a class="nav-link text-light h5" aria-current="page" href="liste_location.php">locations</a></li>
                              <li class="nav-item btn btn-warning "><a class="nav-link text-light h5" aria-current="page" href="gerer.php">Gerer</a></li>
                              <li class="nav-item" style="padding-left: 30px;">
                                    <form class="d-flex">
                                          <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
                                           <a class="btn btn-outline-info text-light m-lg-2" style="text-decoration :none;" href="*">chercher</a>
                                          <a class="btn btn-outline-info text-light m-lg-2" style="text-decoration :none;" href="formulaire_louer.php ">LOUER</a>
                                    </form>
                              </li>

                        </ul>
                  </div>
            </div>
      </nav>
</body>

</html>