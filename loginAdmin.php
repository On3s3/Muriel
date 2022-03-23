<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container border border-success d-flex justify-content-center m-5 w-25">

        <form action="" method="post">

            <div class="form m-3">Login Admin</div>

            <div class="">
                <!-- <label for="pseudo">pseudo:</label> -->
                <input type="text" required class="form-control" name="pseudo" placeholder="Pseudo">
            </div>

            <div class="form m-2"></div>

            <div class="mt-3 ">
                <!-- <label for="mdp"></label> -->
                <input type="password" class="form-control" placeholder="Password" name="mdp"></input>
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

if (isset($_POST['valider'])) {
    //creation des variables
    $pseudo = htmlspecialchars($_POST['pseudo']); //kipick
    // $mdp = $_POST['mdp']; // root
    $mdp=htmlspecialchars(sha1($_POST['mdp'])); // root
    
    $q = $connexion_bd->prepare('SELECT * FROM admin
                            WHERE pseudoadmin = :pseudoadmin
                            AND passadmin = :passadmin');

       

        $q->execute([
            'pseudoadmin' => $pseudo,
            'passadmin' => $mdp
        ]);
       // var_dump($q);

        $compte = $q->rowCount();
//var_dump($compte);

        if ($compte) {
            $user = $q->fetch(PDO::FETCH_OBJ);
           $_SESSION['idadmin'] = $user->id;

           header('Location: admin_profile.php?id=' . $user->id);
        } else {
            $error = 'la combinaison nom d\'utilisateur et mot de passe incorrecte !!!';
        }
}

?>