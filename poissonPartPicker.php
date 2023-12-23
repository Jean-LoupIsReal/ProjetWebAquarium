<?php
include_once("inc/header.php");

    $aquariums = $itemManager->getAquariums();
    $filtres = $itemManager->getItems("Filtre");
    $chauffeeaus = $itemManager->getItems("Chauffe-eau");
    $substraits = $itemManager->getItems("Substrait");
    $decorations = $itemManager->getItems("Décorations");
    $lumieres = $itemManager->getItems("Lumières");
    $thermometres = $itemManager->getItems("Thermomètres");
    $nettoyages = $itemManager->getItems("Nettoyage");

?>

<article class="section-principale">

    <aside class="boutons-fonctions">
        <button>Vider</button>
        <button>Voir l'inventaire</button>
        <button>Passer au panier</button>
    </aside>

    <section class="part-picker">
        <form class="picker">
            <div class="part">
                <h2><u>Aquarium</u></h2>
                <select>
                    <?php foreach ($aquariums as $aquarium)
                            echo '<option value="' . $aquarium->get_no . '">' . $aquarium->get_no_compagnie . " " . $aquarium->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Filtre</u></h2>
                <select>
                    <?php  foreach ($filtres as $filtre)
                            echo '<option value="' . $filtre->get_no . '">' . $filtre->get_no_compagnie . " " . $filtre->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Chauffe-Eau</u></h2>
                <select>
                    <?php foreach ($chauffeeaus as $chauffeeau)
                            echo '<option value="' . $chauffeeau->get_no . '">' . $chauffeeau->get_no_compagnie . " " . $chauffeeau->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Substrait</u></h2>
                <select>
                    <?php foreach ($substraits as $substrait)
                            echo '<option value="' . $substrait->get_no . '">' . $substrait->get_no_compagnie . " " . $substrait->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Décoration</u></h2>
                <select>
                    <?php foreach ($decorations as $decoration)
                            echo '<option value="' . $decoration->get_no . '">' . $decoration->get_no_compagnie . " " . $decoration->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Lumière</u></h2>
                <select>
                    <?php foreach ($lumieres as $lumiere)
                            echo '<option value="' . $lumiere->get_no . '">' . $lumiere->get_no_compagnie . " " . $lumiere->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Thermomètre</u></h2>
                <select>
                    <?php foreach ($thermometres as $thermometre)
                            echo '<option value="' . $thermometre->get_no . '">' . $thermometre->get_no_compagnie . " " . $thermometre->get_gallons . '</option>'; ?>
                </select>
                <hr>
            </div>
            <div class="part">
                <h2><u>Nettoyage</u></h2>
                <select>
                    <?php foreach ($nettoyages as $nettoyage)
                            echo '<option value="' . $nettoyage->get_no . '">' . $nettoyage->get_no_compagnie . " " . $nettoyage->get_gallons . '</option>'; ?>
                </select>
            </div>
        </form>
    </section>
</article>

<?php
include_once("inc/footer.php");
?>