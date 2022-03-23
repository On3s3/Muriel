<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
    <?php require('header.php')?>
  
    <form action=" " method="post">
        <div class="container  d-flex justify-content  m-3">
        
            <div class=" w-50 ">
                <textarea class="form-control" placeholder=""  name="reponse" id="" cols="" rows=""></textarea>
            </div> 

            <div class="mt-3">
            <button name="valider" type="submit" class="btn btn-danger m-4">ENVOYER</button>
            </div>

        </div>
        
    </form>

</body>
</html>

<?php   
    
    $idet= intval($_GET['idet']);
    $idcom= intval($_GET['idcom']);
    require('connexion_bd.php');

    if (isset($_POST['valider'])){
    //creation des variables
        $sugg= htmlspecialchars($_POST['reponse']); 
              
        $insert_reponse = $connexion_bd -> prepare("INSERT into repondre (repondre, idet, idcomment) VALUES (?,?,?) ");
        $insert_reponse -> execute(array($sugg,$idet, $idcom));
            echo 'Bien enregistrer';

    } else {
            //echo 'Erreur enregistrerment';
        
} 

?>