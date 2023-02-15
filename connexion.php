<!-- Projet : Livre d'or 
Langages : HTML / CSS / JS / PHP
Auteur : Mehdi Romdhani
Date : 14/02/2023 -->
<?php



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS  -->
    <link rel="stylesheet" href="./assets/style.css">
    <title>Livre d'or _ Version 2 </title>
</head>

<body>
    <!-- **********************HEADER NAV ****************** -->
    <?php require_once './include/header.php' ?>

    <div class="subcribe-container">
        <form action="" method="POST" id="form_co">
            <label for="login">Login</label>
            <input type="text" name="login" autocomplete="off">
            <label for="password">Mot de Passe</label>
            <input type="text" name="password" autocomplete="off">
            <button type="submit">Connexion</button>
        </form>
    </div>


</body>

</html>