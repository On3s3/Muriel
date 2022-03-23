<?php include('bd.php');


?>
<?php ?>
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

<body>
  
<div class="mt-4">

    <h4 class="m-3 p-2 text-center text-info">Liste des locations</h4>
    
            <table class="table table-hover mt-4 w-75 table-responsive container">
                <tr class="table-dark">
                    <th>Locataire</th>
                    <th>Appartement</th>
                    <th>Debut de la location</th>
                    <th>Fin de la location</th>
                    <th>Etat</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>

                <?php
                    
                $locataire  = $bd->query("SELECT vendre.datedeb, vendre.datefin, locataire.noml, locataire.prenoml, appartement.libelle
                                            FROM vendre , locataire ,appartement 
                                            WHERE vendre.idl=locataire.idl AND vendre.idap = appartement.idap
                                            ORDER BY vendre.datedeb DESC ");


                while ($ligne = $locataire->fetch()) { ?>
                    <tr class="table-success">
                        <td><?= $ligne['noml']." ".$ligne['prenoml'] ?></td>
                        <td><?= $ligne['libelle'] ?></td>l
                        <td><?= $ligne['datedeb'] ?></td>
                        <td><?= $ligne['datefin'] ?></td>
                        <td>
                            <?php
                               if ($ligne['datefin']>= date("Y-m-d")) {
                                    echo "OCCUPEE";
                                } else {
                                    echo "LIBRE MAINTENANT";
                                }
                            ?>
                            
                        </td>
                        
                        <td>
                            
                            <form action="" method="post">
                                <a href="update.php?id=<?=$ligne['idl']?>"  name="send"  class="btn btn-success">Modifier</a>
                                <a href="update.php?id=<?=$ligne['idl']?>"  name="sup"  class="btn btn-danger">Supprimer</a>
                                </a>

                             </form>
                        </td>                       

                    </tr>
                <?php }  ?>

            </table>
            </div>

            <div class="d-flex justify-content-center text-light  mt-4">

                <a class="nav-link text-light  w-50 text-center h5 btn btn-danger m-4" aria-current="page" href="index.php">Retour</a>
            </div>

</body>

</html>