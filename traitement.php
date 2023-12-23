<?php include_once("inc/pretraitement.php");
    echo "<div class='traitement'>";
    if(isset($_REQUEST["insc"]))
    {
        $utilisateur_manager = new utilisateur_manager($bdd);
        if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
        {
            echo "<h1>Cher ". $_REQUEST["nom"] . " vous avez deja un compte chez nous</h1>";
        }
        else{
            echo "<h1>Merci de vous être inscrit ". $_REQUEST["nom"] . "</h1>";
            $utilisateur_manager->ajouteUtilisateur($_REQUEST["nom"], $_REQUEST["mdp"], $_REQUEST["email"], $_REQUEST["adresse"], $_REQUEST["ville"], $_REQUEST["pays"], "nouv");
        }
    }
    else if(isset($_REQUEST["con"]) && isset($_SESSION["utilisateur"]))
    {
        $utilisateur = unserialize($_SESSION["utilisateur"]);
        echo "<h1>Bienvenue ". $utilisateur->get_nom_utilisateur(). "</h1>";
        //$_SESSION["panier"] = serialize();
    }
    echo "</div>";
include_once("inc/footer.php");
?>