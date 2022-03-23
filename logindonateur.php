<?php
$message = '';
include 'cagbd.php';

      if (isset($_POST['login'])) {

            $mail = htmlspecialchars($_POST['mail']);
            $pwd = sha1($_POST['pwd']);

                  $q = $bd->prepare("SELECT * FROM donateur
                                    WHERE mail = :mail
                                    AND passdon = :pwd");

                  $q->execute([
                  'mail' => $mail,
                  'pwd' => $pwd,
                  ]);

                  $compte = $q->rowCount();

                  if ($compte) {
                  $user = $q->fetch(PDO::FETCH_OBJ);

                  $_SESSION['iddo'] = $user->iddo;

                  header('Location: principal.php?id=' . $user->iddo);
                  } else {
                  $message = 'Erreur';
                  }
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

<body class="text-whit" >


      <div class="container mt-5 d-flex justify-content-center">
            <form class=" text-center w-25 mt-5 bg-secondary p-3 z-index" action="" method="POST">
                  <h5 class="h4 mt-3 mb-2 text-center text-light">Connexion</h5>

                  <?php
                  if (!empty($message) and $message === "Erreur") { ?>
                        <div class="mt-2 mb-2 alert alert-danger ">
                              <span class="text-danger h5 text-center">Incorrect, reessayer</span>
                        </div>
                  <?php }?>

      
                  <div class="mt-3 mb-3 ">
                        <!-- <label for="pseudo">Entrer votre pseudo:</label> -->
                        <input type="text" class="form-control" name="mail" placeholder="Adresse electronique">
                  </div> 

                  <div class="mt-3 mb-3 text-center">
                        <!-- <label for="mdp">Entrer le mot de passe :</label> -->
                        <input type="password" class="form-control " name="pwd" placeholder="Mot de passe"><br>

                        <a class="mt-2 text-center text-danger" href="formulaire_donataire.php">Creer un compte</a>
                  </div> 

                  <div class="mt-3 ">
                         <button name="login" type="submit" class=" text-center spiner-border mt-1 btn btn-danger mb-3 ">Connexion</button>
                  </div> 

                  <div class="mt-3 ">
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

