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
            <button class="bouton_carousel prev">&#11164;</button>
            <a href="poissonPartPicker.php" class="slide">
                <h3>Poisson part picker</h3>
                <img src="./img/poissonpp.jpg" alt="poissonpp"class="">
            </a>

            <?php
            $categories = ["Poisson", "Aquarium", "Chauffe-eau", "Substrait", "Décoration", "Filtre", "Lumière", "Thermomètre", "Nettoyage" ];
            foreach($categories as $cat)
            {   
                echo '<a href="./inventaire.php?categorie='. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '" class="slide">';
                    echo    '<h3>'. $cat .'</h3>';
                    echo    '<img src="img/'. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '.jpg" alt="">';
                echo '</a>';
            }?>
            <button onclick="carousel()" class="next">&#11166;</button>
        </div>
        
    </section>

<?php include_once("inc/footer.php") ?>