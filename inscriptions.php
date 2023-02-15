<?php
require_once('connect.php');
require_once('./functions/register.php');




if (isset($_POST['login']) && isset($_POST['password'])) {

    echo register($_POST['login'], $_POST['password']);
    die();
}
var_dump($_POST);


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS  -->
    <link rel="stylesheet" href="./assets/style.css">
    <!-- LINK JS -->
    <script src="./assets/js/inscription.js" defer></script>
    <title>Livre d'or _ Version 2 </title>
</head>

<body>
    <!-- **********************HEADER NAV ****************** -->
    <?php require_once './include/header.php' ?>

    <div class="subscribe-container">
        <!-- Creation de deux btn pour avoir accés a l'inscription/connexion -->
        <div class="btn-sub-container">

            <button type="submit" id="sub-btn">Inscription</button>
            <button type="submit" id="co-btn">Connexion</button>
        </div>
        <form action="" method="POST" id="form_sub">
            <label for="login">Login</label>
            <input type="text" name="login" autocomplete="off">
            <span style="color:red;"><?php echo @$mess_error ?></span>
            <label for="password">Mot de Passe</label>
            <input type="text" name="password" autocomplete="off">
            <label for="confpassword">Confirmation Mot de Passe</label>
            <input type="password" name="confpassword" autocomplete="off">
            <button type="submit" name='submit'>S'inscrire</button>
            <br>
            <p id='mess_done'></p>

        </form>

        <div class="subcribe-container">
        <form action="" method="POST" id="form_co">
            <label for="login">Login</label>
            <input type="text" name="login" autocomplete="off">
            <label for="password">Mot de Passe</label>
            <input type="text" name="password" autocomplete="off">
            <button type="submit" name="sub_form">Connexion</button>
        </form>
    </div>

    </div>


</body>

</html>