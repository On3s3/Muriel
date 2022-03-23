<?php ?>
<?php
include('cagbd.php');
$message = "";

if (isset($_POST['send'])) {
      if (
            //controle des champs libres
            ($_POST['name']) !="" and ($_POST['mail']) !="" and ($_POST['pwd']) !="" and ($_POST['prof']) !=""

      ) {
            //insertion dans la base de donnee
            $insert = $bd->prepare("INSERT INTO utilisateur(nomutil,mailutil,passutil,profession) values(?,?,?,?)");
            $insert->execute(array($_POST['name'],$_POST['mail'],sha1($_POST['pwd']),$_POST['prof']));


            //confirmation d'enregistrement
            $message = "Succes";
      } else {

            //echec d'enregistrement
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
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <title class="bg-danger">helpUS</title>
      <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

      <div class="form-signin d-flex justify-content-center mt-5">
            <form action="" method="post" class="container w-25 p-3 mt-5 bg-secondary shadow">

                  <h4 class="h3 text-light text-center mb-4">Inscription</h4>

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
                        <input type="text" name="prof" class="form-control" id="" placeholder="Profesion">
                  </div>

                  <div class="mt-2 mb-3">
                        <input type="email" name="mail" class="form-control" id="" placeholder="Adresse electronique">
                  </div>


                  <div class="mt-2 mb-3">
                        <input type="password" name="pwd" class="form-control" id="" placeholder="Mot de passe">
                  </div>

                  <div class="">
                        <button type="submit" class="mt-2 mb-3 btn btn-danger text-light text-center btn-lg w-100" name="send">Enregistrement</button>
                  </div>
            </form>
      </div>
      <script src="./bootstrap-dist/js/bootstrap.min.js"></script>
</body>

</html>