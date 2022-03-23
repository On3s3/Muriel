<?php
$message = '';
include 'cagbd.php';

if (isset($_POST['login'])) {
    $mail = htmlspecialchars($_POST['mail']);
    $pwd = sha1($_POST['pwd']);

    $q = $bd->prepare('SELECT * FROM utilisateur
            WHERE mailutil = :mail
            AND passutil = :pwd');

    $q->execute([
        'mail' => $mail,
        'pwd' => $pwd,
    ]);

    $compte = $q->rowCount();

    if ($compte) {
        $user = $q->fetch(PDO::FETCH_OBJ);

        $_SESSION['idutil'] = $user->idutil;

        header('Location: principalUser.php?user=' . $user->idutil);
    } else {
        $message = 'Erreur';
    }
} else {
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <title>Document</title>
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./fontawesome-free/css/all.min.css">
      
      <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body class="text-whit " >


      <div class="container mt-5 d-flex justify-content-center">
            <form class=" text-center w-25 mt-5 bg-secondary rounded p-3" action="" method="POST">
                  <h5 class="h4 mt-3 mb-2 text-center ">Connexion</h5>

                  <?php
                 
                  if (!empty($message)) { ?>
                        <div class="mt-2 mb-2 alert alert-danger">
                              <span class="text-succes text-center">la combinaison du mot de passe et l'addresse est incorrect</span>
                        </div>
                  <?php }
                  ?>

                  <div class="mt-3 mb-3 ">
                        <!-- <label for="pseudo">Entrer votre pseudo:</label> -->
                        <input type="text" class="form-control" name="mail" placeholder="Adesse electronique">
                  </div> 

                  <div class="mt-4 mb-3 text-center">
                        <!-- <label for="mdp">Entrer le mot de passe :</label> -->
                        <input type="password" class="form-control " name="pwd" placeholder="Mot de passe"><br>

                        <a class="mt-2 text-center text-danger" href="formulaire_utilisateurs.php">Creer un compte</a>
                  </div> 

                  <div class="mt-3 ">
                         <button name="login" type="submit" class=" text-center spiner-border mt-1 btn btn-danger mb-3 ">Connexion</button>
                  </div> 

                  <div class="mt-1 mb- ">
                        <a href="https://www.google.com" class="btn btn-google btn-user btn-block">
                              <i class="fab fa-google fa-fw text-white"></i>
                        </a>

                        <a href="https://www.facebook.com" class="btn btn-facebook btn-user btn-block">
                              <i class="fab fa-facebook-f fa-fw text-white"></i>
                        </a> 
                  </div> 
            </form>
      </div>

</body>

</html>

