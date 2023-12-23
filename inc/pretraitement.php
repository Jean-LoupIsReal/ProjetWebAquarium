<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 

include_once("inc/autoloader.php");
include_once("classe/PDOFactory.php");
include_once("manager/item_manager.php");
include_once("manager/utilisateur_manager.php");

$bdd = PDOFactory::getMySQLConnection();
$itemManager = new item_manager($bdd);
if(isset($_REQUEST["con"]))
{
    echo "<h2>connexion</h2>";
    
    if($id = $utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
    {
        $utilisateur = $utilisateur_manager->getUtilisateur($_REQUEST["nom"]);
        if($utilisateur != null)
        {
            $_SESSION['utilisateur'] = serialize($utilisateur);
            echo "<h2>Bienvenue ". $utilisateur->get_nom(). "</h2>";
        }
    }
}
$utilisateur_manager = new utilisateur_manager($bdd);


include_once("inc/header.php");
?>