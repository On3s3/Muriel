<?php

try
{
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
   
      $bd = new PDO('mysql:host=localhost;dbname=helproject', 'root', '',$pdo_options);
}
catch (Exception $e)
{
      die('Erreur : ' . $e->getMessage());
}
?>
