<?php
    //Affectation de la valeur pour le titre du gabarit
    $titre = "MonBlog - " . $billet['titre'];
    //Ouverture de la mise en tampon du flux HTML
    //Qui sera enregistré plus loin dans $contenu
    ob_start(); ?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
    </article>
    <hr />
    <header>
        <h1 id="titreReponses">Réponses à <?= $billet['titre'] ?></h1>
    </header>
    <?php foreach ($commentaires as $commentaire): ?>
        <p><?= $commentaire['auteur'] ?> dit :</p>
        <p><?= $commentaire['contenu'] ?> </p>
    <?php endforeach;
    //Stockage du flux HTML dans la variable $contenu
    $contenu = ob_get_clean();
    //Appel du gabarit pour l'affichage
    require 'gabarit.php';