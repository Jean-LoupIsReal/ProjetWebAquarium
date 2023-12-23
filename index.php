<?php include_once("inc/pretraitement.php") ?>
<!-- page d'accueil -->
<div class='index'>
    <h1>Bienvenu sur notre site!</h1>

    <h2>Sections du site</h2>
    <!--************************************************************************* -->
    <!--*************** CHAMGEMENT DE PLANS, FAIT PAR JEAN-LOUP ***************** -->
    <!--************************************************************************* -->
    <section aria-label="selection">
        <div class="carousel">
            <!-- <button class="bouton_carousel prev col-1 col-2m">&#11164;&#11164;</button> -->
            <a href="poissonPartPicker.php" class="slideI col-3 col-10m premier">
                <h3>Poisson part picker</h3>
                <img src="./img/poissonpp.jpg" alt="poissonpp"class="">
            </a>
            <a href="panier.php" class="slideI col-3 col-10m">
                <h3>Panier</h3>
                <img src="./img/panier.jpg" alt="panier"class="">
            </a>
            <a href="inventaire.php" class="slideI col-3 col-10m">
                <h3>Inventaire</h3>
                <img src="./img/inventaire.jpg" alt="panier"class="">
            </a>
            <?php
            $categories = ["Poisson", "Aquarium", "Chauffe-eau", "Substrait", "Décoration", "Filtre", "Lumière", "Thermomètre", "Nettoyage" ];
            foreach($categories as $cat)
            {   
                echo '<a href="./inventaire.php?categorie='. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))).'" class="slideI col-3 col-10m';
                if($cat == "Nettoyage")
                    echo " dernier";
                echo '">';
                    echo    '<h3>'. $cat .'</h3>';
                    echo    '<img src="img/'. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '.jpg" alt="">';
                echo '</a>';
            }?>
            <!-- <button class="bouton_carousel next col-1 col-2m">&#11166;&#11166;</button> -->
        </div>
        
    </section>

<?php include_once("inc/footer.php") ?>