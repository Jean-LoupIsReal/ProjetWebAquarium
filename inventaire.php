<?php 
include_once("inc/header.php");

?>

<!-- affiche les éléments selon le filtre du poisson part picker -->
<div class="inventaire">
    <?php 
    if(!isset($_REQUEST["categorie"])){
        $categories = ["Poisson", "Aquarium", "Chauffe-eau", "Substrait", "Décoration", "Filtre", "Lumière", "Thermomètre", "Nettoyage" ];
        foreach($categories as $cat)
        {   
            echo '<a href="/webs5/ProjetWebAquarium/inventaire.php?categorie='. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '" class="categ">';
            echo    '<img src="img/'. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '.jpg" alt="">';
            echo    '<p>'. $cat .'</p>';
            echo '</a>';
        }
        
    }

    elseif($_REQUEST["categorie"] == "poisson")
    {
        $poissons = $itemManager->getPoissons();
        //affiche les poissons
        foreach($poissons as $poisson)
        {
            $poisson->affiche();
        }
    }

    elseif($_REQUEST["categorie"] == "aquarium")
    {
        $aquariums = $itemManager->getAquariums();
        //affiche les aquariums
        foreach($aquariums as $aquarium)
        {
            $aquarium->affiche();
        }
    }

    else
    {
        $items = $itemManager->getItems($_REQUEST["categorie"]);
        //affiche les items
        foreach($items as $item)
        {
            echo "<div>";
            echo "<img src='img/items/". $_REQUEST["categorie"] ."/". $_REQUEST["categorie"] .".jpg' alt='". $_REQUEST["categorie"] ."'></img>"; //si temps ajouter img précise avec $poisson->get_img()
            echo "<p>". $item->get_type() . " " . $item->get_compagnie() . " " . $item->get_nom(). "</p><p>". $item->get_prix(). "$". "</p>";
            echo "<button onclick='ajouterItemPanier()'class='" . $item->get_no(). " ". $_REQUEST["categorie"] ."'>Ajouter au panier</button>";
            echo "</div>";
        }
        
    }

    ?>

</div>
<?php include_once("inc/footer.php") ?>