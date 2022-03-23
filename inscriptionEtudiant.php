
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5 d-flex justify-content-center ">
        <form id="gauche" action="" method="post" enctype="multipart/form-data" class="border border-success w-50 mt-2 mb-2 rounded">
            <h3 class="text-center bg-success mb-5 text-light p-2">Nouveau compte</h3>

            <div class="m-2 ">
                <!-- <label for="nom">Entrer votre nom:</label> -->
                <input type="text" class="form-control" name="nom" placeholder="Nom" required>
            </div> <br>

            <div class="m-2">
                <!-- <label for="prenom">Entrer votre prenom:</label> -->
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
            </div> <br>

            <div class="m-2">
                <!-- <label for="pseudo">Entrer votre pseudo:</label> -->
                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required>
            </div> <br>

            <div class="m-2 ">
                <!-- <label for="mail">Entrer l'addresse electronique :</label> -->
                <input type="email" class="form-control" name="mail" placeholder="Email" required>
            </div> <br>

            <div class="m-2 ">
                <!-- <label for="mdp">Entrer le mot de passe :</label> -->
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>
            </div> <br>

            <div class="m-2 text-center">
                <button name="envoyer" type="submit" class="btn btn-dark mt-1 mb-2 p-2">ENVOYER</button>
                <button name="Annuler" type="reset" class="btn btn-warning mt-1 mb-2 p-2 text-light">ANNULER</button> <br>
            </div> <br>

            
        </form>
    </div>
</body>
</html>

    <?php 

    require('connexion_bd.php');

        if (isset($_POST['envoyer'])) {
            
                
                $nom= htmlspecialchars($_POST['nom']);
                $prenom= htmlspecialchars($_POST['prenom']);
                $pseudo= htmlspecialchars($_POST['pseudo']);
                $mail= htmlspecialchars($_POST['mail']);
                $mdp= sha1($_POST['mdp']);
                   

                $insert_inscrit = $connexion_bd -> prepare("INSERT INTO etudiant(nomet, prenomet,mdp, email) VALUES (?,?,?,?)");
                $insert_inscrit -> execute(array($nom, $prenom, $mdp, $mail));
                    //echo "Enregistrement reussi";
                    header("Location:loginEtudiant.php");

                
        } else {
                   // echo "Enregistrement echoué ";
        }
    

    ?>

