<?php 

$dsn = 'mysql:dbname=livre-or-js;host=localhost';
$user = 'root';
$password = '';


try{
    $bdd = new PDO($dsn,$user,$password);

  }
  catch (PDOException $e) {
      echo 'Echec de la connexion : ' . $e->getMessage();
      exit;
  }