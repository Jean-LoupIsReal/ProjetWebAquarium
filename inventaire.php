<?php include_once("inc/header.php") ?>

<!-- affiche les éléments selon le filtre du poisson part picker -->
<div class="inventaire">
    <?php 
    if(!isset($_REQUEST["categorie"])){
        echo "<h1>Choisit la categorie</h1>";
        $categories = ["Poisson", "Aquarium", "Chauffe-eau", "Substrait", "Décoration", "Filtre", "Lumière", "Thermomètre", "Nettoyage" ];
        foreach($categories as $cat)
        {   

            echo '<a href="./inventaire.php?categorie='. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '" class="categ col-3 col-11m">';

            echo    '<img src="img/'. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '.jpg" alt="">';
            echo    '<p>'. $cat .'</p>';
            echo '</a>';
        }
        
    }

    elseif($_REQUEST["categorie"] == "poisson")
    {
        echo "<h1>Les poissons</h1>";
        $poissons = $itemManager->getPoissons();
        //affiche les poissons
        foreach($poissons as $poisson)
        {

            $poisson->affiche("ajouter");

        }
    }

    elseif($_REQUEST["categorie"] == "aquarium")
    {
        echo "<h1>Les aquariums</h1>";
        $aquariums = $itemManager->getAquariums();
        //affiche les aquariums
        foreach($aquariums as $aquarium)
        {

            $aquarium->affiche("ajouter");

        }
    }

    else
    {
        $items = $itemManager->getItems($_REQUEST["categorie"]);
        //affiche les items
        echo "<h1>". $items[0]->get_type() ."</h1>";
        foreach($items as $item)
        {
            $item->affiche("ajouter");
        }
    }

    ?>

</div>
<?php include_once("inc/footer.php") ?>