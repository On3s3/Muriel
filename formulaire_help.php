<?php
include 'cagbd.php';

//recuperation de l'id de l'utilisateur
$idutil = intval($_GET['user']);

// include('cagbd.php');
$message = "";

if (isset($_POST['send'])) {
      if (
            //controle des champs libres
            ($_POST['titre']) != "" and ($_POST['desc']) != "" and ($_POST['benef']) != "" and ($_POST['prenom']) != "" and ($_POST['debut']) != "" and ($_POST['fin']) != ""  and ($_POST['prix']) != ""

      ) {
            //recuperation des donnees
            $titre = htmlspecialchars($_POST['titre']);
            $benef = htmlspecialchars($_POST['benef']);
            $desc = htmlspecialchars($_POST['desc']);
            $debut = htmlspecialchars($_POST['debut']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $fin = htmlspecialchars($_POST['fin']);
            $montant = htmlspecialchars($_POST['prix']);
            $img = [
                  'img_src' => 'img/' . $_FILES['img']['name'],
                  'img_file' => $_FILES['img']['tmp_name']
            ];

            $monimage = ['img_src' => $img['img_src'],];

            move_uploaded_file($img['img_file'], $img['img_src']);



            //insertion des donnees
            $insert = $bd->prepare("INSERT INTO help(titre, description, beneficiaire,debut,fin,montant,idutil,imghelp) values(?,?,?,?,?,?,?,?)");
            $insert->execute(
                  array($titre, $desc, $benef, $debut, $fin, $montant, $idutil, $img['img_src'])
            );

            //message de cnfirmation d'enregistrement
            $message = "Succes";
      } else {
            //message d'echec d'enregistrement
            $message = "Erreur";
      }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <title>| helpUS |</title>
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body class="">

      <main class="form-signin d-flex justify-content-center mt-2">
            <form class="container m-4 p-2 bg-white rounded-3" method="POST" action="" enctype="multipart/form-data">

                  <div class="mb-2">
                        <h4 class="text-center text-danger">Nouveau</h4>
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
                              <span class="text-succes h5 text-center">cagnote bien pris en compte</span>
                        </div>
                  <?php
                  }
                  ?>

                  <div class="form-group row m-5">
                        <div class="col-md-5">
                              <div class="mt- mb-3">
                                    <input type="text" name="titre" class="form-control" id="" placeholder="Titre">
                              </div>



                              <div class="mt-2 mb-3">
                                    <input type="text" name="benef" class="form-control" id="" placeholder="Beneficaire">
                              </div>

                              <div class="mt-2 mb-3">
                                    <input type="text" name="prenom" class="form-control" id="" placeholder="Prenom">
                              </div>

                              <div class="mt-2 mb-3">
                                    <input type="text" name="prix" class="form-control" id="" placeholder="Montant">
                              </div>

                              <div class="mt-2 mb-3">
                                    <label for="debut" class="text-muted">Ajouter une date debut :</label>
                                    <input type="date" name="debut" class="form-control" id="" placeholder="Prix">
                              </div>

                              <div class="mt-2 mb-1">
                                    <label for="fin" class="text-muted">Ajouter une date de fin :</label>
                                    <input type="date" name="fin" class="form-control" id="" placeholder="Prix">
                              </div>
                        </div>
                        <div class="col-md-7">
                              <div class="mt- mb-3">
                                    <textarea type="text" name="desc" class="form-control" id="" cols="35" rows="11" placeholder="Description"></textarea>
                              </div>

                              <div class="mt-2 mb-1">
                                    <label for="img" class="text-muted">Ajouter une image (facultatif) :</label>
                                    <input type="file" name="img" class="form-control" id="">
                              </div>
                        </div>
                  </div>

                  <div class="">
                        <input type="submit" class="mt-1 mb-1 btn-danger text-light text-center btn-lg w-100" value="Valider" name="send">
                  </div>

                  <div class="m-2 p-2 row">
                        <span class="col-3 glyphicon glyphicon- "></span>
                        <i class="col-3"></i>
                        <i class="col-3"></i>
                  </div>


            </form>
      </main>

</body>

</html>