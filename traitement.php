<?php include_once("inc/pretraitement.php");

    echo "<div class='pageTraitement'>";

    if(isset($_REQUEST["action"]) && $_REQUEST["action"] == "paid")
    {
        echo '<script type="text/javascript">
         viderPanier();
         </script>';
    }

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
    else if(isset($_REQUEST["con"])) {
        echo "<h1>Mauvais nom d'utilisateur ou mot de passe!</h1>";
        
        if($utilisateur_manager->utilisateurExiste($_REQUEST["nom"]))
        {
            $utilisateur = $utilisateur_manager->getUtilisateur($_REQUEST["nom"], $_REQUEST["mdp"]);
            if($no_utilisateur != null)
            {

            }

            echo "<h2>Bienvenue ". $utilisateur->get_nom_utilisateur(). "</h2>";
        }

    }
    echo "</div>";
include_once("inc/footer.php");


?>