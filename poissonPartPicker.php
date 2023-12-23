<?php
include_once("inc/header.php");

    $aquariums = $itemManager->getAquariums();
    $filtres = $itemManager->getItems("Filtre");
    $chauffeeaus = $itemManager->getItems("Chauffe-eau");
    $substraits = $itemManager->getItems("Substrait");
    $decorations = $itemManager->getItems("Décoration");
    $lumieres = $itemManager->getItems("Lumière");
    $thermometres = $itemManager->getItems("Thermomètre");
    $nettoyages = $itemManager->getItems("Nettoyage");

?>

<article class="section-principale">

    <aside class="boutons-fonctions">
        <a href="inventaire.php"><button id="bouton-inventaire" action="panier.php">Voir l'inventaire</button></a>
        <button id="bouton-panier" type="submit" form="partpicker" value="submit">Passer au panier</button>
    </aside>

    <section class="part-picker">
        <form id="partpicker" name="partpicker" onsubmit=transferPick()>

            <div class="part">
                <h2><u>Aquarium</u></h2>
                <select class="aqua-picker" name="aquarium">
                    <option value="0">Aucun</option>
                    <?php foreach ($aquariums as $aquarium)
                            echo '<option value="' . $aquarium->get_no() . '">' . $aquarium->get_type() . " " . $aquarium->get_gallons() . ' Gallons</option>'; ?>
                </select>
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Filtre</u></h2>
                <select class="picker" name="filtre">
                    <option value="0">Aucun</option>
                    <?php  foreach ($filtres as $filtre)
                            echo '<option value="' . $filtre->get_no() . '">' . $filtre->get_nom() . '</option>'; ?>
                </select class="picker">
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Chauffe-Eau</u></h2>
                <select class="picker" name="chauffe">
                    <option value="0">Aucun</option>
                    <?php foreach ($chauffeeaus as $chauffeeau)
                            echo '<option value="' . $chauffeeau->get_no() . '">' . $chauffeeau->get_nom() . '</option>'; ?>
                </select class="picker">
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Substrait</u></h2>
                <select class="picker" name="substrait">
                    <option value="0">Aucun</option>
                    <?php foreach ($substraits as $substrait)
                            echo '<option value="' . $substrait->get_no() . '">' . $substrait->get_nom() . '</option>'; ?>
                </select class="picker">
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Décoration</u></h2>
                <select class="picker" name="deco">
                    <option value="0">Aucun</option>
                    <?php foreach ($decorations as $decoration)
                            echo '<option value="' . $decoration->get_no() . '">' . $decoration->get_nom() . '</option>'; ?>
                </select class="picker">
            </div>
            <hr>

            <div class="part">
                <h2><u>Lumière</u></h2>
                <select class="picker" name="lumiere">
                    <option value="0">Aucun</option>
                    <?php foreach ($lumieres as $lumiere)
                            echo '<option value="' . $lumiere->get_no() . '">' . $lumiere->get_nom() . '</option>'; ?>
                </select>
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Thermomètre</u></h2>
                <select class="picker" name="thermo">
                    <option value="0">Aucun</option>
                    <?php foreach ($thermometres as $thermometre)
                            echo '<option value="' . $thermometre->get_no() . '">' . $thermometre->get_nom() . '</option>'; ?>
                </select>
                <p class="description-item"></p>
            </div>
            <hr>

            <div class="part">
                <h2><u>Nettoyage</u></h2>
                <select class="picker" name="nettoyage">
                    <option value="0">Aucun</option>
                    <?php foreach ($nettoyages as $nettoyage)
                            echo '<option value="' . $nettoyage->get_no() . '">' . $nettoyage->get_nom() . '</option>'; ?>
                </select>
            </div>
            
        </form>
    </section>
</article>

<?php
include_once("inc/footer.php");
?>