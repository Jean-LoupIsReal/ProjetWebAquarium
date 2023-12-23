<?php
include_once("inc/header.php");
?>

<h1 class="titre-panier"><u>Votre Panier</u></h1>
<button onclick=viderPanier() class="empty">Vider le panier</button>

<article class="panier-paiement"> 
    <section class="liste-panier">
        <?php

            $sousTotal = 0;
            $livraison = 0;

            //premier loop pour créer des objets Aquarium par la BD
            if(isset($_COOKIE["panierAquarium"]))
            {
                $aquariums = json_decode($_COOKIE["panierAquarium"], true);

                foreach($aquariums as $id)
                {
                    $tempAquarium = $itemManager->getAquariumByID($id);
                    $sousTotal += $tempAquarium->get_prix();

                    $tempAquarium->affiche("supprimer");
                }
            }

            //deuxième loop pour les objets items
            if(isset($_COOKIE["panierItem"]))
            {
                $items = json_decode($_COOKIE["panierItem"], true);

                foreach($items as $id)
                {
                    $tempItem = $itemManager->getItemByID($id);
                    $sousTotal += $tempItem->get_prix();

                    $tempItem->affiche("supprimer");
                }
            }

            //dernier loop pour les poissons
            if(isset($_COOKIE["panierPoisson"]))
            {
                $poissons = json_decode($_COOKIE["panierPoisson"], true);

                foreach($poissons as $id)
                {
                    $tempPoisson = $itemManager->getPoissonByID($id);
                    $sousTotal += $tempPoisson->get_prix();

                    $tempPoisson->affiche("supprimer");
                }  
            }

            //si un objet est dans le panier, obtenir un coût de livraison
            if($sousTotal != 0)
            {
                $livraison = rand(2, 15);
            }

            ?>
    </section>

    <aside class="paiement">
         <div>
            <h1>Paiement</h1>
            <span class="paiement-cout">
                <div>
                    <p>Sous-Total</p> <p><?php echo $sousTotal."$" ?></p>
                </div>
                <div>
                    <p>Coût de Livraison</p> <p><?php echo $livraison."$"; 
                    $sousTotal += $livraison;?></p>
                </div>
                <div>
                    <p>Taxes</p> <p><?php $taxes = round($sousTotal * 0.09975, 2);
                    $sousTotal += $taxes;
                    echo $taxes; ?>$</p>
                </div>
            </span>
            <hr>
            <h1>Total: <?php echo $sousTotal; ?>$</h1>
            <!-- retourne à la page principale en vidant le panier !-->
            <?php if($sousTotal != 0) { ?>
            <button onclick=viderPanier()><a href="index.php">Payer</a></button>
             <?php } ?>
         </div>
    </aside>
</article>

<?php
include_once("inc/footer.php");
?>