<!-- inscription d'un compte -->
<?php include_once("inc/header.php") ?>
<div class="inscription">
    <h1>Création de votre compte</h1>

    <form action="traitement.php" method="post" class="register">
        <!-- Entrée de nom -->
        <label for="nom" class='col-3 col-12m'>Nom d'utilisateur :</label>
        <input type="text" name="nom" id="nom"class='col-7 col-11m' required>
        <!-- Entrée d'email -->
        <label for="email" class='col-3 col-12m'>Email :</label>
        <input type="text" name="email" id="email"class='col-7 col-11m' required>
        <!-- Entrée de mdp -->
        <label for="mdp" class='col-3 col-12m'>Mot de passe :</label>
        <input type="password" name="mdp" id="mdp"class='col-7 col-11m' required>
        <!-- Entrée d'adresse -->
        <label for="adresse" class='col-3 col-12m'>Adresse :</label>
        <input type="text" name="adresse" id="adresse"class='col-7 col-11m' required>
        <!-- Entrée de ville -->
        <label for="ville" class='col-3 col-12m'>Ville :</label>
        <input type="text" name="ville" id="ville"class='col-7 col-11m' required>
        <!-- Entrée de pays -->
        <label for="pays" class='col-3 col-12m'>Pays :</label>
        <select name="pays" id="pays" class='col-7 col-11m'>
            <?php 
                $pays = $utilisateur_manager->getPays();
                
                foreach( $pays as $nom)
                {
                        echo "<option value='" . $nom[0] . "'>" . $nom[1] . "</option>";
                }
            ?>
        </select>
        <button type='submit' class='col-10 col-10m'>Créer le compte</button>
    </form>
 </div>
<?php include_once("inc/footer.php") ?>