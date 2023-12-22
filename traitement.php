<?php include_once("inc/pretraitement.php")

    if(isset($_REQUEST["insc"]))
    {
        echo "<h2>insc</h2>";
        if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
        {
            echo "<h2>Cher ". $_REQUEST["nom"] . " vous avez deja un compte chez nous</h2>";
        }
        else{
            echo "<h2>Bienvenue ". $_REQUEST["nom"] . "</h2>";
            $utilisateur_manager->ajouteUtilisateur($_REQUEST["nom"], $_REQUEST["mdp"], $_REQUEST["email"], $_REQUEST["adresse"], $_REQUEST["ville"], $_REQUEST["pays"], "nouv");
        }
    }
    else if(isset($_REQUEST["con"]))
    {
        echo "<h2>connexion</h2>";
        
        if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
        {
            $utilisateur = $utilisateur_manager->getUtilisateur($_REQUEST["nom"])
            if($no_utilisateur != null)
            {

            }

            echo "<h2>Bienvenue ". $utilisateur->get_nom(). "</h2>";
        }
    }

include_once("inc/footer.php");
<?php
include_once("inc/pretraitement.php");
include_once("inc/header.php");

if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "paid")
{
    echo '<script type="text/javascript">
     viderPanier();
     </script>';
}


?>