<?php

    $user = 'root';

    try{
      $connexion_bd = new PDO('mysql:host=localhost;dbname=schooldoc', $user, '');
      $connexion_bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // echo"connexion reussie";
    }
        catch(PDOException $e)
        {
        //En cas d'erreur, on affiche un message 
            echo "connexion echoue ".$e->getMessage();
        }
?>

