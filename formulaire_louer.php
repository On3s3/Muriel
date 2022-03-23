<?php

include('bd.php');
$message = "";
$locataire = $bd->query('SELECT * FROM  locataire');
$select = $bd->query('SELECT * FROM appartement');

if (isset($_POST['send'])) {
      if (
            
            !empty($_POST['datedeb']) and
            !empty($_POST['type']) and
            !empty($_POST['app']) 
            
      ) {
            $insert = $bd->prepare("INSERT INTO vendre(datedeb, datefin,idl,idap,comment) values(?,?,?,?,?)");
            $insert->execute(
                  array(
                       
                        $_POST['datedeb'],
                        $_POST['datefin'],
                        $_POST['type'],
                        $_POST['app'],
                        $_POST['comment'],

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
1
<body class="">

     
      <main class="form-signin d-flex justify-content-center mt-4">
            <form class="container w-50 pt-3 border mt-5 rounded" method="POST" action="">

                  <div class="mt-2 mb-4">
                        <h4 class="text-center text-info">Nouvelle location</h4>
                  </div>

                  <?php
                  if (!empty($message) and $message === "Erreur") { ?>
                        <div class="mt-2 mb-4 alert alert-danger ">
                              <span class="text-danger h5 text-center">Tout les champs sont obligatoires</span>
                        </div>
                  <?php
                  }
                  if (!empty($message) and $message === "Succes") { ?>
                        <div class="mt-2 mb-4 alert alert-success">
                              <span class="text-succes h5 text-center">Location bien pris en compte</span>
                        </div>
                  <?php
                  }
                  ?>

                  <div class="mt-2 mb-3">
                        <select name="type" class="form-select">
                              <option value="">locataire</option>
                              <?php while ($louer = $locataire->fetch()) { ?>
                                    <option value="<?= $louer['idl'] ?>"><?= $louer['noml'] ?><?php " " ?><?= $louer['prenoml'] ?></option>

                              <?php } ?>
                        </select>
                  </div>

                  <div class="mt-2 mb-3">
                        <select name="app" class="form-select">
                              <option value="">Appartement</option>
                              <?php while ($app = $select->fetch()) { ?>
                                    <option value="<?= $app['idap'] ?>"><?= $app['libelle'] ?></option>

                              <?php } ?>
                        </select>
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="date" name="datedeb" class="form-control" id="" placeholder="">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="date" name="datefin" class="form-control" id="" placeholder="">
                  </div>

                  <div class="mt-2 mb-3">
                        <textarea type="text" name="comment" class="form-control" id="" cols="35" rows="1" placeholder="Commentaire (facultatif)"></textarea>
                  </div>



                  <div class="">
                        <input type="submit" class="mt-2 mb-3 btn btn-info text-light text-center btn-lg w-100" value="Valider" name="send">
                  </div>
            
                  <a class="nav-link text-light h5 btn btn-danger mt-1" aria-current="page" href="gerer.php">Retour</a>
                  
                  <div class="m-2 p-2 row">
                        <span class="col-3 glyphicon glyphicon- "></span>
                        <i class="col-3"></i>
                        <i class="col-3"></i>
                  </div>


            </form>
      </main>

</body>

</html>