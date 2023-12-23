<?php include_once("inc/pretraitement.php");
    echo "<div class='traitement'>";
    if(isset($_REQUEST["insc"]))
    {
        echo "<h1>insc</h1>";
        if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
        {
            echo "<h1>Cher ". $_REQUEST["nom"] . " vous avez deja un compte chez nous</h1>";
        }
        else{
            echo "<h1>Bienvenue ". $_REQUEST["nom"] . "</h1>";
            $utilisateur_manager->ajouteUtilisateur($_REQUEST["nom"], $_REQUEST["mdp"], $_REQUEST["email"], $_REQUEST["adresse"], $_REQUEST["ville"], $_REQUEST["pays"], "nouv");
        }
    }
    else if(isset($_REQUEST["con"]) && isset($_SESSION["utilisateur"]))
    {
        echo "<h1>Bienvenue ". $utilisateur->get_nom_utilisateur(). "</h1>";
    }
    echo "</div>";
include_once("inc/footer.php");
?>