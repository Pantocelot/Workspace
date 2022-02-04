<?php
//Effectue la connexion à la BD
//Instancie et renvoie l'objet PDO associé
function getBdd()
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

//Fonction qui renvoie la liste de tous les billets triés   
function getBillets()
{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8',
    'root', '');
    $billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
    . ' BIL_TITRE as titre, BIL_CONTENU as contenu from BILLET'
    . ' order by BIL_ID');
    return $billets;
}

//Fonction qui renvoie les informations du billet passé en paramètre
function getBillet($idBillet)
{
    $bdd=getBdd();
    //Requête préparée
    $billet = $bdd->prepare('select BIL_ID as id, BIL_DATE as date,'
    . ' BIL_TITRE as titre, BIL_CONTENU as contenu from BILLET'
    . ' where Bil_ID = ?');
    //Exécution de la requête en remplacant ? par la valeur du paramètre
    $billet->execute(array($idBillet));
    if($billet->rowCount() == 1)
        return $billet->fetch();
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant $idBillet");
}

//Fonction qui renvoir la liste des commentaires associés au billet en paramètre
function getCommentaires($idBillet)
{
    $bdd=getBdd();
    //Requête préparée
    $commentaires = $bdd->prepare('select COM_ID as id, COM_DATE as date,'
    . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from COMMENTAIRE'
    . ' where Bil_ID = ?');
    //Exécution de la requête en remplaçant ? par la valeur du paramètre
    $commentaires->execute(array($idBillet));
    return $commentaires;
}