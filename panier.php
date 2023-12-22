<?php
include_once("inc/header.php");
include_once("manager/item_manager.php")
?>

<h1 class="titre-panier"><u>Votre Panier</u></h1>
<article class="panier-paiement"> 
    <section class="liste-panier">
        <?php
            // $contenu = $_COOKIE["panierAquarium"];
            $contenu = [1, 2, 3, 4, 5, 6, 7, 8];
            $sousTotal = 0;

            foreach($contenu as $id)
            {
                $tempAquarium = $itemManager->getAquariumByID($id);
                $sousTotal += $tempAquarium->get_prix();

                $tempAquarium->affiche("supprimer");

            
            }
            $contenu = $_COOKIE["panierItem"];

            foreach($contenu as $id)
            {
                $tempItem = $itemManager->getItemByID($id);
                $sousTotal += $objet->get_prix();

                ?>
                <div>
                    <img src=<?php  ?> class="image-objet">
                    <h2><?php  ?></h2>
                    <p><?php  ?></p>
                </div>
            <?php }
            $contenu = null;
            ?>
    </section>

    <aside class="paiement">
         <div>
            <h1>Paiement</h1>
            <span class="paiement-cout">
                <div>
                    <p>Sous-Total</p> <p><?php  ?></p>
                </div>
                <div>
                    <p>Coût de Livraison</p> <p><?php   ?></p>
                </div>
                <div>
                    <p>Taxes</p> <p><<?php   ?>/p>
                </div>
            </span>
            <hr>
            <h1>Total: <?php   ?>$</h1>
            <button>Payer</button>
         </div>
    </aside>
</article>

<?php
include_once("inc/footer.php");
?>