<?php

    require('connexion_bd.php');

    if (isset($_POST['valider'])){
    //creation des variables
        $nom= htmlspecialchars($_POST['nom']);
        $prenom= htmlspecialchars($_POST['prenom']);
        $pseudo= htmlspecialchars($_POST['pseudo']);
        $mail= htmlspecialchars($_POST['mail']);
        $mdp=sha1($_POST['mdp']);
        // $isDelegue= htmlspecialchars($_POST['isDelegue']);


    //insertion dans la table
        $insert_inscrit = $connexion_bd -> prepare("INSERT INTO etudiant(nomet, prenom, pseudo, mdp, email) VALUES (?,?,?,?,?)");
        $insert_inscrit -> execute(array($nom, $prenom, $pseudo, $mdp, $mail));
            echo 'Bien enregistrer';

        } else {
            echo 'Erreur enregistrerment';
        
} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container mt-2 d-flex justify-content-center" >
            <form action="" method="POST">
                <div class="mt-2 mb-2">
                    <label for="nom">Entrer votre nom:</label>
                    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                </div> <br>

                <div class="mt-2 mb-2">
                    <label for="prenom">Entrer votre prenom:</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                </div> <br>

                <div class="mt-2 mb-2">
                    <label for="pseudo">Entrer votre pseudo:</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
                </div> <br>

                <div class="mt-2 mb-2">
                    <label for="mail">Entrer l'addresse electronique :</label>
                    <input type="email" class="form-control" name="mail" placeholder="mail" required>
                </div> <br>

                <div class="mt-2 mb-2">
                    <label for="mdp">Entrer le mot de passe :</label>
                    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
                </div> <br>
                
                <!-- <div class="mt-2 mb-2">
                    <label for="isDelegue">Activer comme delegué :</label>
                    <select name="isDelegue" class="form-control">
                        <option value=""></option>
                        <option value="active">ACTIVE</option>
                        <option value="desactive">DESACTIVE</option>
                    </select>
                </div> <br> -->

                <button name="valider" type="submit" class="btn btn-dark mt-3 " style="width: 5cm;">ENVOYER</button>
                <button name="Annuler" type="reset" class="btn btn-dark mt-3" style="width: 5cm;">ANNULER</button>
            </form>
        </div>
        <h1></h1>
</body>
</html>

