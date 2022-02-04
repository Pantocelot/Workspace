<?php
require 'modele.php';
//Affiche la liste de tous les billets du blog
function accueil()
{
    //Rechercher les données dans la BD
    $billets = getBillets();
    //Renvoie la vue
    require 'vueAccueil.php';
}

//Affiche les commentaires sur un billet
function billet($idBillet)
{
    //Rechercher dans la BD les infos du billet
    $billet = getBillet($idBillet);
    //Rechercher dans la BD les commentaires du billet
    $commentaires=getCommentaires($idBillet);
    //Appel de la vue
    require 'vueBillet.php';
}

//Affiche une page erreur
function erreur($msgErreur)
{
    require 'vueErreur.php';
}