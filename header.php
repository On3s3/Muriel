<?php $rep=intval($_GET['idet']); ?>
<!DOCTYPE HTML>
<html>
<head>
  
  <title>CLOUDOC</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <!-- /<a class="navbar-brand" href="#">Logo</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse h-4" id="collapsibleNavbar">
      <ul class="navbar-nav text-light h5">
        <li class="nav-item m-3">
          <a class="nav-link border border-warning " href="AccueilUsers.php?idet=<?= $rep;?>">Accueil</a>
        </li>
        <li class="nav-item m-3">
          <a class="nav-link border border-warning" href="comm.php?idet=<?= $rep;?>">Commentaires</a>
        </li>
        <li class="nav-item m-3">
          <a class="nav-link border border-warning" href="NumeroETliens.php?idet=<?= $rep;?>">Liens utiles</a>
        </li>  
        <li class="nav-item m-3">
          <a class="nav-link border border-warning" href="deconnexion.php?idet=<?= $rep;?>">Deconnexion</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  
</div>

<script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>
