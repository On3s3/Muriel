<?php include 'cagbd.php';
?>

<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>helpUS</title>

  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <link href="style.css" rel="stylesheet">
</head>

<body class="text-white bg-dark">


  <span class="mb-auto">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column mb-auto">
      <h3 class="float-md-start mb-0 ">helProject🤝</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end bg-danger row ">
        <a class="col-sm-2 nav-link dropdown-toggle text-light" aria-current="page" data-toggle="dropdown" role="button" aria-expanded="false" href="*">Voir +
          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
            <li class="hover"><a href="*">Mes projets</a></li>
            <li class="hover"><a href="*">Participations</a></li>
          </ul>
        </a>
        <a class="col-sm-2 nav-link text-light" href="">Contact</a>
        <a class="col-sm-2 nav-link text-light" href="logout.php">deconnexion</a>
      </nav>
    </div>

    <main class="px-3">
      <?php
      include('maliste.php');
      include('formulaire_participer.php');

      ?>

    </main>
    <?php require 'footer.php'; ?>

  </span>
  <script src="./js/bootstrap.bundle.min.js"></script>

</body>

</html>