<?php
 $rep=intval($_GET['idet']); 

require('connexion_bd.php');
require('../layout/header.php');


    $afficheMatiere = $connexion_bd-> query('SELECT * FROM matiere');

?>

<table border="1" class="m-5 w-25 row ">
    <tr class="">
        <th class=" col-2">Numero</th>
        <th>Matiere</th>
    </tr>


<?php
    while (  $ligne=$afficheMatiere-> fetch()){
?>

    <tr>
        <td  class="col-8"><?= $ligne['idmat']?></td>
        <td><a href="../config/listeEpreuve.php?idet=<?= $rep;?>">  <?= $ligne['nommat']?> </a></td>
    </tr>

<?php }?>

</table>
