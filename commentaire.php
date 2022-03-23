<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  
  <form action=" " method="post">
      <div class="container  d-flex justify-content-center m-2">
      
        <div class="">
          <label for="sugg">Votre commentaire</label>
          <textarea class="form-control" style="width:500px;" name="sugg" ></textarea>
        </div>  

        <div class="mt-3">
         <button name="valider" type="submit" class="btn btn-danger m-4">ENVOYER</button>
        </div>
     </div>
    
  </form>

</body>
</html>

<?php    

    $rep=intval($_GET['idet']);
    require('connexion_bd.php');

    if (isset($_POST['valider'])){
   
        $sugg= htmlspecialchars($_POST['sugg']); 
              
        $inserer= $connexion_bd -> prepare("INSERT into commentaire (commentaire, idet )  VALUES (?,?) ");
        $inserer-> execute(array($sugg, $rep));
            echo 'Bien enregistrer';

        } else {
            //echo 'Erreur enregistrerment';
        
} 

?>