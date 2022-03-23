<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>
    <div>

    <?php require('header.php'); 
          require('connexion_bd.php');
    
     $affiche = $connexion_bd-> query('SELECT * FROM epreuve where niveau="1ere"');
      while (  $epreuve=$affiche-> fetch()){ ?>

        <table  class="table table-hover w-75 container-sm  m-4">
            <tr class="table-warning">
                    <!-- <th colspan="">Nom</th> -->
                    <th >Niveau</th>
                    <th colspan="">Periode</th>
                    <th colspan="3">Fichier</th>
                </tr>
               
                 <tr>
                        
                        <td>
                            <?= $epreuve['niveau']?>
                        </td>

                        <td colspan=""> 
                            <?= $epreuve['periode']?> 
                        </td>

                        <td colspan="3">
                             <a style="text-decoration: none;" class="text-danger" href="<?= $epreuve['fichiers']?>"  target="blank"> 
                             <?= $epreuve['fichiers']  ?>
                            </a>
                        </td>
                <?php }?>
        </table>
        
                    </hr>


        <?php ;
    
     $affiche = $connexion_bd-> query('SELECT * FROM epreuve where niveau="2eme"');
     while (  $epreuve=$affiche-> fetch()){ ?>
    
        <table  class="table table-hover w-75container-sm m-5">
            <tr class="table-warning">
                    <!-- <th colspan="">Nom</th> -->
                    <th >Niveau</th>
                    <th colspan="">Periode</th>
                    <th colspan="3">Fichier</th>
                </tr>
               
                   
                 <tr>
                        
                        <td>
                            <?= $epreuve['niveau']?>
                        </td>

                        <td colspan=""> 
                            <?= $epreuve['periode']?> 
                        </td>

                        <td colspan="3">
                             <a style="text-decoration: none;" class="text-danger" href="<?= $epreuve['fichiers']?>"  target="blank"> 
                             <?= $epreuve['fichiers']  ?>
                            </a>
                        </td>
                <?php }?>
        </table> 
                    </hr>

        
        <?php 
    
     $affiche = $connexion_bd-> query('SELECT * FROM epreuve where niveau="examen"');
      while (  $epreuve=$affiche-> fetch()){ ?>


    ?>
        <table  class="table table-hover w-75container-sm m-4">
            <tr class="table-warning">
                    <!-- <th colspan="">Nom</th> -->
                    <th >Niveau</th>
                    <th colspan="">Periode</th>
                    <th colspan="3">Fichier</th>
                </tr>
               
                 <tr>
                        
                        <td>
                            <?= $epreuve['niveau']?>
                        </td>

                        <td colspan=""> 
                            <?= $epreuve['periode']?> 
                        </td>

                        <td colspan="3">
                             <a style="text-decoration: none;" class="text-danger" href="<?= $epreuve['fichiers']?>"  target="blank"> 
                             <?= $epreuve['fichiers']  ?>
                            </a>
                        </td>
                <?php }?>
        </table>
    </div>
    <div>
        <script></script>
    </div>
</body>
</html>