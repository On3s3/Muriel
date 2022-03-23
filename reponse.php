<?php
    $idet= intval($_GET['idet']);
    $idcom= intval($_GET['idcomment']);
    require('connexion_bd.php');
    require('header.php');
    
        $affichereponse = $connexion_bd->query("SELECT * FROM repondre,commentaire,etudiant where repondre.idcomment= commentaire.idcomment ");
        $r = $affichereponse->fetchAll();
        // echo"<pre>";
        //  print_r($r);
        // echo"</pre>";
//         foreach ($r as $valeur) {
//             echo $valeur['repondre'];
//         }
?>

    <div class="m-5 text-center">Les reponses a ce commentaire</div>
  
<?php 
    foreach ($r as $valeur) {

?>
        <div class="">
            <div class=""><?= $valeur['pseudo'];?></div>
            <div class="m-3 border-bottom p-2" ><?= $valeur['repondre']?> </div> 
        </div>

<?php }?>
