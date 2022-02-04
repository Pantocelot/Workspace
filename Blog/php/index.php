<?php
require 'controleur.php';

try
{
    if(isset($_GET['action']))
    {
        switch($_GET['action'])
        {
            case "billet":
                if(isset($_GET['id']))
                {
                    $idBillet = intval($_GET['id']);
                    if($idBillet != 0)
                    {
                        //Appel fonction controleur billet
                        billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide !");
                }
                else
                    throw new Exception("Identifiant de billet non défini !");
                break;
            default:
                throw new Exception("Action non valide !");
                break;
        }

    }
    else
        accueil(); //Action par défaut   
}
catch(Exception $e)
{
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}
