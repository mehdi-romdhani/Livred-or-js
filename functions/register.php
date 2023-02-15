<?php

$dbhost = 'localhost';
$dbname = 'livre-or-js';
$dbuser = 'root';
$dbpass = '';
$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


function register($login,$password) {
    // Connexion à la base de données
    
    global $db;
    $mess_error = "Le nom d'utilisateur ou l'adresse e-mail est déjà utilisé.";
    $mess_sub="Inscription réussie.";
    // Vérification de l'unicité du nom d'utilisateur et de l'adresse e-mail
    $stmt = $db->prepare("SELECT COUNT(*) FROM utilisateurs WHERE login=:login");
    $stmt->bindParam(':login', $login);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        
       return  $mess_error;
    }
 
    // Hachage du mot de passe
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
 
    // Insertion de l'utilisateur dans la base de données
    $stmt = $db->prepare("INSERT INTO utilisateurs(login,password) VALUES (:login, :password)");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':password', $password_hash);
    $stmt->execute();
    
 
    return $mess_sub;
 }