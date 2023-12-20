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
        echo $poisson->get_no(). " ".$poisson->get_nom() . " ". $poisson->get_no()." ". $poisson->get_no(). " ";
    }
}

elseif($_REQUEST["categorie"] == "aquarium")
{

}

else
{
    
}

?>

</div>
<?php include_once("inc/footer.php") ?>