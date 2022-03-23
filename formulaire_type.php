<?php

include('bd.php');
$message = "";

if (isset($_POST['send'])) {
      if (

            !empty($_POST['libelle']) and
            !empty($_POST['desc']) and
            !empty($_POST['prix'])
      ) {
            $insert = $bd->prepare("INSERT INTO type(libelleT, descriptionT, prixjour) values(?,?,?)");
            $insert->execute(
                  array(
                        $_POST['libelle'],
                        $_POST['desc'],
                        $_POST['prix'],

                  )
            );

            $message = "Succes";
      } else {
            $message = "Erreur";
      }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <title>| PacelaIMOB |</title>
      <link rel="stylesheet" href="./bootstrap-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./style.css">
</head>

<body>
      <nav class="navbar navbar-expand-lg  text-light  $zindex-sidenav-backdrop: 900; bg-dar">
            <div class="container px-5">
                  <a class="navbar-brand text-light h3 lg" href="#!">pacelaIMMOB.</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                              <li class="nav-item "><a class="nav-link text-light h4" aria-current="page" href="#!">Acueil</a></li>
                              <li class="nav-item" style="padding-left: 30px;">
                                    <form class="d-flex">
                                          <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn btn-outline-danger" type="submit">Search</button>
                                    </form>
                              </li>

                        </ul>
                  </div>
            </div>
      </nav>
      <main class="form-signin d-flex justify-content-center ">
            <form class="container w-50 pt-4 mt-4 " method="POST"  action="">

                  <div class="mt-2 mb-4">
                        <h3 class="text-center text-info" >Types</h3>
                  </div>

                  <?php
                  if (!empty($message) and $message == "Erreur") { ?>
                        <div class="mt-2 mb-4 alert alert-danger ">
                              <span class="text-danger h5 text-center">Tout les champs sont obligatoires</span>
                        </div>
                  <?php
                  }
                  if (!empty($message) and $message == "Succes") { ?>
                        <div class="mt-2 mb-4 alert alert-success">
                              <span class="text-succes h5 text-center">Enregistr&eacute;</span>
                        </div>
                  <?php
                  }
                  ?>

                  <div class="mt-2 mb-3">
                        <input type="text" name="libelle" class="form-control" id="" placeholder="Libelle type">
                  </div>


                  <div class="mt-2 mb-3">
                        <textarea type="date" name="desc" class="form-control" id="" placeholder="Description" cols="35" rows="1"></textarea>
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="text" name="prix" class="form-control" id="" placeholder="Prix">
                  </div>



                  <div class="">
                        <input type="submit" class="mt-2 mb-3 
                         text-light text-center btn btn-info btn-lg w-100" value="Ajouter" name="send";>
                  </div>

                  <a class="nav-link text-light h5 btn btn-danger mt-1" aria-current="page" href="gerer.php">Retour</a>
                 


            </form>
      </main>

</body>

</html>