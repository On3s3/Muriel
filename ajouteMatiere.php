<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="mt-2 mb-2">
                <label for="matiere">Entrer le nom de la matiere :</label>
                <input type="text" class="form-control" name="matiere" placeholder="Nom de la matiere">
            </div> <br>

            <button name="valider" type="submit" class="btn btn-dark mt-3 w-50">ENVOYER</button>
            <button name="Annuler" type="reset" class="btn btn-dark mt-3 w-50" >ANNULER</button>
        </form>
    </div>
    
</body>
</html>

<?php 

require('connexion_bd.php');

    if (isset($_POST['valider'])) {
        
            
            $nom_matiere= htmlspecialchars($_POST['matiere']);

            $insert_matiere = $connexion_bd -> prepare("INSERT INTO matiere(nommat) VALUES (?)");
            $insert_matiere -> execute(array($nom_matiere));
                echo "Enregistrement reussi";
            
    } else {
                echo "Enregistrement echoué ";
    }


?>

