<?php ?>
<?php
include('bd.php');
$message = "";
$afficher = $bd->query('SELECT * FROM type');


if (isset($_POST['send'])) {
      if (

            !empty($_POST['appart']) and
            !empty($_POST['desc']) and
            !empty($_POST['adresse']) and
            !empty($_POST['type'])
      ) {
            $insert = $bd->prepare("INSERT INTO appartement(libelle,descriptionap,adresse,idT) values(?,?,?,?)");

            $insert->execute(
                  array(
                        $_POST['appart'],
                        $_POST['desc'],
                        $_POST['adresse'],
                        $_POST['type'],

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
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="./style.css">
      <title class="bg-danger">| PacelaIMOB |</title>
</head>

<body class="bdy">

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
      <div class="form-signin d-flex justify-content-center">
            <form action="" method="post" class="container  p-3 mt-5 rounded-3 p-5">

                  <header class="h3 text-info text-center mb-4">Nouveau appartement</header>

                  <?php
                  if (!empty($message) and $message === "Erreur") { ?>
                        <div class="mt-2 mb-4 alert alert-danger ">
                              <span class="text-danger h5 text-center">Tout les champs sont obligatoires</span>
                        </div>
                  <?php
                  }
                  if (!empty($message) and $message === "Succes") { ?>
                        <div class="mt-2 mb-4 alert alert-success">
                              <span class="text-succes h5 text-center">Enregistr&eacute;</span>
                        </div>
                  <?php
                  }
                  ?>

                  <div class="row d-flex justify-content-center">
                        <div class="col-3">

                              <div class="mt-3 mb-4">
                                    <input type="text" name="appart" class="form-control" id="" placeholder="Appartement">
                              </div>
                        </div>
                        <div class="col-3">

                              <div class="mt-3 mb-3">
                                    <textarea name="desc" class="form-control" id="" placeholder="description" cols="20" rows="1"></textarea>
                              </div>
                        </div>
                        <div class="col-2">

                              <div class="mt-3 mb-4">
                                    <input type="text" name="adresse" class="form-control" id="" placeholder="Adresse">
                              </div>
                        </div>
                        <div class="col-2">

                              <div class="mt-3 mb-4">
                                    <select name="type" class="form-select">
                                          <option value="">Type</option>
                                          <?php while ($ligne = $afficher->fetch()) { ?>
                                                <option value="<?= $ligne['idT'] ?>" ?><?= $ligne['libelleT'] ?></option>

                                          <?php } ?>
                                    </select>
                              </div>
                        </div>

                  </div>

                  <div class="">
                        <button type="submit" class="mt-2 mb-3 btn btn-info text-light text-center btn-lg w-100" name="send">Ajouter</button>
                  </div>
                  <a class="nav-link text-light h5 btn btn-danger mt-1" aria-current="page" href="gerer.php">Retour</a>
            </form>
      </div>

      <footer class="mt-2">
            <div class="container ">
                  <p class="text-center">Copyright &copy; pacelaIMMOB 2022</p>
            </div>
      </footer>

</body>
<script src="./bootstrap-dist/js/bootstrap.min.js"></script>

</body>

</html>