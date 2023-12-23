<!-- connexion au compte -->
<?php include_once("inc/pretraitement.php") ?>
<div class="inscription">
    <h1>Connexion</h1>

    <form action="traitement.php" method="post">
        <!-- Entrée de nom -->
        <label for="nom" class='col-3 col-12m'>Nom d'utilisateur :</label>
        <input type="text" name="nom" id="nom"class='col-7 col-11m' required>
        <!-- Entrée d'email -->
        <!-- Entrée de mdp -->
        <label for="mdp" class='col-3 col-12m'>Mot de passe :</label>
        <input type="password" name="mdp" id="mdp"class='col-7 col-11m' required>
        <input type="hidden" name="con" value="con">
        <button type='submit' class='col-10 col-10m' >Connexion</button>
    </form>
 </div>
<?php include_once("inc/footer.php") ?>