<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les clients</title>
</head>
    <body>
    <?php
        //Utiliser le fichier connexion.php
        include("connexionPDO.php");
        //Requête SQL pour récupérer les données
        $sql = "SELECT nom, rue, CP, ville FROM client";
        //Connexion à la BD
        $monPDO = connexion();
        //Exécution de la requête SQL
        $lesClients = $monPDO->query($sql);
    ?>
    
    <h3>AFFICHAGE DES <?php echo $lesClients->rowCount(); ?> CLIENTS ENREGISTRES</h3>
    <br/>
    <table border=1>
    <tr>
        <th>RAISON SOCIALE</th>
        <th>RUE</th>
        <th>CODE POSTAL</th>
        <th>VILLE</th>
    </tr>
    </table>

    <?php
    //Pour toutes les lignes du tableau jeu d'enregistrements
    foreach($lesClients as $ligne)
    {
        //Affichage des données
        echo '<tr>';
            echo '<td>'.$ligne['nom'].'</td>';
            echo '<td>'.$ligne['rue'].'</td>';
            echo '<td>'.$ligne['CP'].'</td>';
            echo '<td>'.$ligne['ville'].'</td>';
    }
    $lesClients->closeCursor();
    ?>
    </body>
</html>