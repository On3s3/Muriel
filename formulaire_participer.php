<?php

// include('cagbd.php');

// //recuperer l'id de la table help
// $id=intval($_GET['id']);

// //recuperer l'id de la table donateur
$iddon = intval($_GET['id']);


$message = "";

if (isset($_POST['send'])) {
      if (
            //controle des champs libres
            ($_POST['montant']) != "" and ($_POST['tel']) != "" and ($_FILES['capture']) != "" and ($_POST['compte']) != "" and ($_POST['id']) != ""

      ) {
            //recuperation des données de l'utilistaeur
            $montant = htmlspecialchars($_POST['montant']);
            $tel = htmlspecialchars($_POST['tel']);
            $compte = htmlspecialchars($_POST['compte']);
            $id = htmlspecialchars($_POST['id']);
            $img = [
                  'img_src' => 'img/' . $_FILES['capture']['name'],
                  'img_file' => $_FILES['capture']['tmp_name']
            ];

            $monimage = ['img_src' => $img['img_src'],];

            move_uploaded_file($img['img_file'], $img['img_src']);;

            //insertion dans la base de donnee
            $insert = $bd->prepare("INSERT INTO participer(tel,part,imgpart,id,iddo,compte) values(?,?,?,?,?,?)");
            $insert->execute(array($tel, $montant, $img['img_src'], $id, $iddon, $compte));

            //confirmation d'enregistrement
            $message = "Succes";
      } else {

            //echec d'enregistrement
            $message = "Erreur";
      }
}


?>

<form class="container bg-light rounded pt-3  mt-3 mb-5" method="POST" action="" enctype="multipart/form-data">

      <div class="mt-2 mb-1">
            <h4 class="text-center text-danger">Nouvelle participation</h4>
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
                  <span class="text-succes h5 text-center">Merci pour votre particiation</span>
            </div>
      <?php
      }
      ?>

      <div class="form-group row" id="">
            <div class="col-md-5 m-3">
                  <div class="mt-2 mb-3">
                        <input type="tel" name="montant" class="form-control" id="" placeholder="Enter le montant">
                  </div>


                  <div class="mt-2 mb-">
                        <input type="text" name="tel" class="form-control" id="" placeholder="Numero de telephone">
                  </div>
            </div>
            <div class="col-md-6 m-3">
                  <div class="mt-2 mb-3">
                        <input type="file" name="capture" class="form-control" id="" placeholder="capture">
                  </div>
                  <div class="mt-2 mb-">
                        <select name="compte" class="form-select">
                              <option value="">Moyen de transfert</option>
                              <option value="flooz">Flooz</option>
                              <option value="tmoney">Tmoney</option>
                              <option value="orange">Orange</option>
                        </select>
                  </div>


            </div>
      </div>
      <div class="mt- mb-3 m-3">
            <select name="id" class="form-select">
                  <option value="" class="text-muted">Liste des demandes d'aides</option>
                  <?php

                  $select = $bd->query('SELECT * FROM help');
                  while ($don = $select->fetch()) { ?>
                        <option value=""></option>
                        <option value="<?= $don['id'] ?>"><?= $don['titre'] ?></option>

                  <?php } ?>
            </select>
      </div>
      <div class=" m-3 ">
            <input type="submit" class="mt-2 mb-3 btn btn-danger text-light text-center form-control" value="Valider" name="send">
      </div>
</form>