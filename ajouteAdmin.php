<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container border border-success d-flex justify-content-center m-5 w-25">

        <form action="" method="post">

            <div class="form m-3 center">AjUTER Admin</div>
                  
            <div class="">
                <label for="pseudo">pseudo:</label>
                <input type="text" required class="form-control" name="pseudo" placeholder="">
            </div> 
            
            <div class="form m-2"></div>

            <div class=" ">
                <label for="mdp">mot de passe</label>
                <input type="password" class="form-control" placeholder=""  name="mdp"></input>
            </div>


            <div class="">
                <button name="valider" type="submit" class="btn btn-danger m-4">ENVOYER</button>
            </div>
                
        </form>

    </div>
</body>
</html>

<?php

    

    include('connexion_bd.php');

    if (isset($_POST['valider'])){
    //creation des variables
    
        $pseudo= htmlspecialchars($_POST['pseudo']); 
       $mdp=htmlspecialchars(sha1($_POST['mdp'])); // root

        $insert_inscrit = $connexion_bd -> prepare("INSERT INTO admin(pseudoadmin,passadmin) VALUES (?,?)");
        $insert_inscrit -> execute(array($pseudo,$mdp));
            echo 'Bien enregistrer';

        } else {
            echo 'Erreur enregistrerment';
        
} 

?>