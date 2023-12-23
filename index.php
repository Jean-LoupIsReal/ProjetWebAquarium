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
            <button onclick="carousel()" class="prev">&#11164;</button>
            <a href="poissonPartPicker.php" class="slide col-3 col-11m">

            </a>

            <?php
            $categories = ["Poisson", "Aquarium", "Chauffe-eau", "Substrait", "Décoration", "Filtre", "Lumière", "Thermomètre", "Nettoyage" ];
            foreach($categories as $cat)
            {   
                echo '<a href="./inventaire.php?categorie='. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '" class="slide col-3 col-11m">';

                echo    '<img src="img/'. str_replace('é', 'e', str_replace('è', 'e', strtolower($cat))). '.jpg" alt="">';
                echo    '<p>'. $cat .'</p>';
                echo '</a>';
            }?>
            <button onclick="carousel()" class="next">&#11166;</button>
        </div>
        
    </section>

    <section class="offres">
        <div class="offre-inventaire">

        </div>
        <div class="offre-partpicker">

        </div>
    </section>
</div>

<?php include_once("inc/footer.php") ?>