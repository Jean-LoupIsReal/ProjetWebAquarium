<?php
include_once("inc/header.php");
?>

<h1>Votre Panier</h1>
<article class="panier-paiement"> 
    <hr>
    <section class="panier">
        <?php
            $contenu = $_COOKIE["panierAquarium"];
            $panier = array();
            foreach($contenu as $id)
            {
                array_push($panier, );
            }
            foreach($panier as $objet)
            {
                $sousTotal += $objet
                ?>
                <div>
                    <img src=<?php  ?> class="image-objet">
                    <h2><?php  ?></h2>
                    <p><?php  ?></p>
                </div>
            <?php }
            $panier=null;

            $contenu = $_COOKIE["panierItem"];
            foreach($contenu as $id)
            {
            
            }
            foreach($panier as $objet)
            {
                $sousTotal += $objet
                ?>
                <div>
                    <img src=<?php  ?> class="image-objet">
                    <h2><?php  ?></h2>
                    <p><?php  ?></p>
                </div>
            <?php }
            $contenu = null;
            $panier = null;
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