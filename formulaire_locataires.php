<?php ?>
<?php
include('bd.php');
$message = "";

if (isset($_POST['send'])) {
      if (
            !empty($_POST['name']) and
            !empty($_POST['lname']) and
            !empty($_POST['birth']) and
            !empty($_POST['mail']) and
            !empty($_POST['tel']) and
            !empty($_POST['pwd'])
      ) {
            $insert = $bd->prepare("INSERT INTO locataire(noml,prenoml,datenaiss,adresse,Numtel,pwd) values(?,?,?,?,?,?)");
            $insert->execute(
                  array(
                        $_POST['name'],
                        $_POST['lname'],
                        $_POST['birth'],
                        $_POST['mail'],
                        $_POST['tel'],
                        sha1($_POST['pwd'])
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
      <title class="bg-danger">PacelaIMOB | Inscription</title>
      <link rel="stylesheet" href="style.css">
</head>

<body class="corps">
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
            <form action="" method="post" class="container w-25 p-3 border mt-5 rounded-3">

                  <header class="h3 text-info text-center mb-4">Inscription</header>

                  <?php
                  if (!empty($message) and $message === "Erreur") { ?>
                        <div class="mt-2 mb-4 alert alert-danger ">
                              <span class="text-danger h5 text-center">Tout les champs sont obligatoires</span>
                        </div>
                  <?php
                  }
                  if (!empty($message) and $message === "Succes") { ?>
                        <div class="mt-2 mb-4 alert alert-success">
                              <span class="text-succes h5 text-center">Vous etes bien enregistr&eacute;</span>
                        </div>
                  <?php
                  }
                  ?>


                  <div class="mt-2 mb-3">
                        <input type="text" name="name" class="form-control" id="" placeholder="Nom">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="text" name="lname" class="form-control" id="" placeholder="Prenom">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="date" name="birth" class="form-control" id="" placeholder="Date de naissance">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="email" name="mail" class="form-control" id="" placeholder="Adresse electronique">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="tel" name="tel" class="form-control" id="" placeholder="Numero de telephone">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="password" name="pwd" class="form-control" id="" placeholder="Mot de passe">
                  </div>

                  <div class="">
                        <button type="submit" class="mt-2 mb-3 btn btn-info text-light text-center btn-lg w-100" name="send">Inscrire</button>
                  </div>

                  <a class="nav-link text-light h5 btn btn-danger mt-1" aria-current="page" href="gerer.php">Retour</a>

            </form>
      </div>
      <script src="./bootstrap-dist/js/bootstrap.min.js"></script>
</body>

</html>