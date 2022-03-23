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

<body >
<?php require('headerX.php'); ?>
<div class="m-5 ">
     
      <h4 class="m-3 p-2 text-center text-info">Liste des locataires</h4>
      <table class="table table-hover mt-4 w-75 mb-5 table-responsive container-sm">
            <tr class="table-dark">
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Date de naissance</th>
                  <th>Adresse</th>
                  <th>Numero de telephone</th>
                  
            </tr>

            <?php
            $aff = $bd->query('SELECT * FROM locataire');


            while ($ligne = $aff->fetch()) { ?>
                  <tr class="table-success">

                        <td><?= $ligne['noml'] ?></td>
                        <td><?= $ligne['prenoml'] ?></td>
                        <td><?= $ligne['datenaiss'] ?></td>
                        <td><?= $ligne['adresse'] ?></td>
                        <td><?= $ligne['Numtel'] ?></td>

                  </tr>
            <?php } ?>

      </table>

      </div>

      <div class="d-flex justify-content-center text-light  mt-4">

      <a class="nav-link text-light  w-50 text-center h5 btn btn-danger m-4" aria-current="page" href="index.php">Retour</a>
      </div>

</div>
      

</body>

</html>