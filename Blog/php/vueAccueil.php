<?php 
  //Affectation de la valeur pour le titre du gabarit
  $titre = "MonBlog";
  //Ouverture de la mise en tampon du flux HTML
  //Qui sera enregistré plus loin dans $contenu
  ob_start();
  foreach ($billets as $billet): ?>
      <article>
          <header>
            <a href="<?= "index.php?action=billet&id=".$billet['id'] ?>">
              <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            </a>
              <time><?= $billet['date'] ?></time>
          </header>
          <p><?= $billet['contenu'] ?></p>
      </article>
      <hr />
      <?php endforeach;
      //Stockage du flux HTML dans la variable $contenu
      $contenu = ob_get_clean();
      //Appel du gabarit pour l'affichage
      require 'gabarit.php';