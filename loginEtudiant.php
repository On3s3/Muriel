<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="pic">
    <!-- <img src="./pictures/pexels1.jpg" alt="" srcset="" width="100%" class="relative"> -->

    <div class="container mt-5 d-flex justify-content-center z-index ">
        <form class=" text-center border w-25 mt-5 mb-3 rounded shadow " action="" method="POST">
            <h5 class="h4 m-3 text-center text light">CONNEXION</h5>

            <div class="m-2  ">
                <!-- <label for="pseudo">Entrer votre pseudo:</label> -->
                <input type="text" class="form-control" name="mail" placeholder="mail" required>
            </div> <br>

            <div class="m-2  text-center">
                <!-- <label for="mdp">Entrer le mot de passe :</label> -->
                <input type="password" class="form-control " name="mdp" placeholder="Mot de passe" required><br>

                <a class="mt-2 text-center" href="inscriptionEtudiant.php">Creer un compte</a>
            </div> <br>

            <button name="login" type="submit" class=" text-center spiner-border mt-1 btn btn-dark mb-3 ">Connexion</button>
        </form>
    </div>

</body>

</html>

<?php


require('connexion_bd.php');

if (isset($_POST['login'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);

    $q = $connexion_bd->prepare('SELECT * FROM etudiant
            WHERE email = :mail
            AND mdp = :mdp');

    $q->execute([
        'mail' => $mail,
        'mdp' => $mdp,
    ]);

    $compte = $q->rowCount();

    if ($compte) {
        $user = $q->fetch(PDO::FETCH_OBJ);

        $_SESSION['idet'] = $user->idet;

        header('Location: AccueilUsers.php?idet=' . $user->idet);
    } else {
        //echo("la combinaison nom d\'utilisateur et mot de passe incorrecte !!!");
    }
}

?>