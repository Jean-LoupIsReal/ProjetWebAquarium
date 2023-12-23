<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Linefont:wght@200&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Coiny&family=Linefont:wght@200&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
</head>
<body class="page">

    <header class="menu">
        <nav class="upper-nav">
            <?php if(isset($_SESSION['utilisateur'])){ ?>
            <div class="textcontain"><p><a href="index.php?logout=logout">Se déconnecter<a></p></div>
            <?php } else { ?>
            <div class="textcontain"><p><a href="connexion.php">Se connecter<a></p></div>
            <div class="textcontain"><p><a href="inscription.php">S'inscrire<a></p></div>
            <?php } ?>
        </nav>
        <nav class="nav-menu">
            <div class="logo-titre">
                <a href="index.php"><img class="logo" src="img/logo.png"></a>
                <h1><a href="index.php">Poisson Part Picker</a></h1>
            </div>
            <div class="page-menu">
                <a href="index.php"><h2>ACCUEIL</h2></a>
                <a href="inventaire.php"><h2>INVENTAIRE</h2></a>
                <a href="poissonPartPicker.php"><h2>PART PICKER</h2></a>
                <a href="panier.php"><img class="panier" src="img/basket.png"></a>
            </div>
            <img id="menubutton" src="img/icone_menu.png">
        </nav>
    </header>

<main class="contenu">