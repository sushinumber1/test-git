<?php
try
{
  // Préparation des paramètres du constructeur
  $user="root";
  $password="philippe"; //mot de passe de MySQL
  $base="film";
  $host="localhost";
  $SGBD="mysql:host=$host;dbname=$base";
  $options[PDO::ATTR_ERRMODE] =
PDO::ERRMODE_EXCEPTION; //Captage des exceptions
  $bdd = new PDO($SGBD, $user, $password, $options);
//construction de $bdd
  echo "Ouverture de la base $base : OK";
}
catch (Exception $e)
{
         die('Erreur : ' . $e->getMessage());
}
?>

