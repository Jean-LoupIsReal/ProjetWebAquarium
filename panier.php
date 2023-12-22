<?php
include_once("inc/header.php");
include_once("manager/item_manager.php")
?>

<h1 class="titre-panier"><u>Votre Panier</u></h1>
<article class="panier-paiement"> 
    <section class="panier">
        <?php
            $contenu = $_COOKIE["panierAquarium"];
        
            foreach($contenu as $id)
            {
                $sousTotal += $objet->get_prix();

                ?>
                <div class="entry">
                    <img src=<?php  ?> class="image-objet">
                    <h2><?php  ?></h2>
                    <p><?php  ?></p>
                </div>
            <?php }
            $contenu = $_COOKIE["panierItem"];

            foreach($contenu as $id)
            {
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
            <span>
                <div>
                    <p>Sous-Total</p> <p><?php  ?></p>
                </div>
                <div>
                    <p>Coût de Livraison</p> <p><?php   ?></p>
                </div>
                <div>
                    <p>Taxes</p> <p><<?php   ?>/p>
                </div>
                <hr>
                <div>
                <p>Total</p> <p><?php   ?></p>
                </div>
            </span>
            <button>Payer</button>
         </div>
    </aside>
</article>

<?php
include_once("inc/footer.php");
?>