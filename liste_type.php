<?php include 'bd.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./bootstrap-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <title>Document</title>
</head>

<body>
      
      <h4 class="m-3 p-2 text-center text-info">Liste des appartements</h4>
      <table class="table table-hover mt-4 w-75 table-responsive container-sm mb-5">
            <tr class="table-info">
                  <th>Libelle</th>
                  <th>Desription</th>
                  <th>Adresse</th>
                  <th>Type</th>
                  <th>Bonus</th>
                  <th>Prix d'une nuitée</th>
                  <th></th>
                  
                  
            </tr>

            <?php
            $apartement = $bd->query("SELECT * FROM type);

            while ($afficher = $apartement->fetch()) { ?>
                  <tr>

                        <td><?= $afficher['libelleT'] ?></td>
                        <td><?= $afficher['descriptionT'] ?></td>
                        <td><?= $afficher['prixjour'] ?></td>
                        
                  </tr>
            <?php } ?>

      </table>

    
</body>

</html>