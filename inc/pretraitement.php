<?php session_start();
include_once("inc/autoloader.php");
include_once("classe/PDOFactory.php");
include_once("manager/item_manager.php");
include_once("manager/utilisateur_manager.php");

$bdd = PDOFactory::getMySQLConnection();
$itemManager = new item_manager($bdd);
if(isset($_REQUEST["con"]) && !isset($_SESSION['utilisateur']))
{
    $utilisateur_manager = new utilisateur_manager($bdd);
    if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
    {
        $utilisateur = $utilisateur_manager->getUtilisateur($_REQUEST["nom"], $_REQUEST["mdp"]);
        if($utilisateur != null)
        {
            $_SESSION['utilisateur'] = serialize($utilisateur);
        }

    }
}
else if(isset($_REQUEST["logout"]))
{
    session_destroy(); 
}


include_once("inc/header.php");
?>