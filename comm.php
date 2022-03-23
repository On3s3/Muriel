<?php
    $rep=intval($_GET['idet']);
    
    require('connexion_bd.php');
    require('header.php');
    require('commentaire.php');
    
        $affichecommentaire = $connexion_bd-> query('SELECT * FROM commentaire ');
      
?>


    <div class="m-5 text-center">Tout les commentaires</div>
  
<?php
    while (  $valeur=$affichecommentaire-> fetch()){
        
?>

    <div class="p-2">
    <?php $i = $valeur['idet']; 
        $etu = $connexion_bd-> query("SELECT nomet FROM etudiant WHERE idet ='$i'");
        $res = $etu-> fetch();
       // echo var_dump($res);
    ?>
        <div class="">
            <div class="m-4 rounded-circle" style><?php echo $res['nomet']; echo'<br>'; echo date("Y/m/d"); echo'<br>' ; echo time()?></div>
                       
            <div class="row border-start"> 
                <div class="col-1 pb-2 mt-3"></div> 
                <div class=" col-8 border-start border-bottom  pb-2 mt-3"><?= $valeur['commentaire']?> </div>
            </div>  
            <div class="row float-center">
            <div class="col-1 p-2 text-center ">
                <a class="p-2 btn btn-warning text-light" href="repondre.php?idet=<?= $rep;?>&idcom=<?= $valeur['idcomment']?>" style="text-decoration: none;"> repondre</a>
            </div>
            <div class="col-1 p-2 text-center">
                <a class="p-2 text-center btn btn-success text-light h-4 " href="reponse.php?idet=<?= $rep;?>&idcom=<?= $valeur['idcomment']?>" style="text-decoration: none;">reponses</a>
            </div>
        </div>
        </div>

        
    </div>
<?php }?>
