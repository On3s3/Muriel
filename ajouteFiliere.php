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
                <label for="filiere">Entrer le nom de la filiere :</label>
                <input type="text" class="form-control" name="filiere" placeholder="Nom de la filiere">
            </div> <br>

            <button name="valider" type="submit" class="btn btn-dark mt-3 w-50">ENVOYER</button>
            <button name="Annuler" type="reset" class="btn btn-dark mt-3 w-50">ANNULER</button>
            
        </form>
    </div>

    <?php  
    require('connexion_bd.php');
        if (isset($_POST['valider'])) {
            if (!empty($_POST['filiere'])) {
                $name = htmlspecialchars($_POST['filiere']);   
                
                $insert_filiere = $connexion_bd -> prepare("INSERT INTO filiere(nomfil) VALUES (?)");
                $insert_filiere-> execute(array($name));

                echo("Filiere enregistrée");
           
            } else {
                echo'Remplir tout les champs...';
            }
            
            
        }
    
    ?>

</body>
</html>