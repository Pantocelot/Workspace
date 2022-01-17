<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Définir les champs de formulaire</h1>

    <form method="post" action="traitement.php">
    <fieldset>
        <legend><b>Informations de connexion</b></legend>
        <label for="numéro">Numéro d'identifiant : </label>
        <input id ="numéro" name="numéro"/>
    <p>
        <label for="utilisateur">Utilisateur : </label>
        <input id ="utilisateur" name="utilisateur"/>
    <p>
        <label for="mot de passe">Mot de passe : </label>
        <input id ="mot de passe" name="mot de passe"/>
    <p>
        <label for="email">E-mail : </label>
        <input id ="email" name="email"/>
    <p>
        <label for="site web">Site web : </label>
        <input id ="site web" name="site web"/>
    </fieldset>
    <p>
    <fieldset>
        <legend><b>Informations personnelles</b></legend>
    <label for="nom">Nom : </label>
        <input id ="nom" name="nom"/>
    <p>
        <label for="prenom">Prénom : </label>
        <input id ="prenom" name="prenom"/>
    <p>
        <label for="date de naissance" >Date de naissance : </label>
        <input id ="date de naissance" name="date de naissance" value="jj/mm/aaaa"/>
    <p>
        <label for="profession">Profession : </label>
        <select name="profession" id="profession">
            <option value="webdesigner">Monteur vidéo</option>
            <option value="monteur video">Webdesigner</option>
            <option value="illustrateur">Illustrateur</option>
            <option value="ingenieur du son">Ingénieur du son</option>
            <option value="photographe">Photographe</option>
        </select>
    </fieldset>
    <p>
    <fieldset>
        <legend><b>Logiciels maîtrisés</legend></b>
        <input type="checkbox" id="photoshop" name="photoshop"/>
        <label for="photoshop">Photoshop</label><br/>
    <p>
        <input type="checkbox" id="illustrator" name="illustrator"/>
        <label for="illustrator">Illustrator</label><br/>
    <p>
        <input type="checkbox" id="flash pro" name="flash pro"/>
        <label for="flash pro">Flash Pro</label><br/>
    <p>
        <input type="checkbox" id="dreamweaver" name="dreamweaver"/>
        <label for="dreamweaver">Dreamweaver</label><br/>
    </fieldset>
    <p>
    <fieldset>
        <legend><b>Études</b></legend>
        <input type="radio" name="bac" value="niveaubac" id="niveaubac" checked="checked"/>
        <label for="niveaubac">Niveau BAC</label><br/>
    <p>
        <input type="radio" name="bac2" value="niveaubac2" id="niveaubac2"/>
        <label for="niveaubac2">Niveau BAC + 2</label><br/>
    <p>
        <input type="radio" name="bac3" value="niveaubac3" id="niveaubac3"/>
        <label for="niveaubac3">Niveau BAC + 3</label><br/>
    <p>
        <input type="radio" name="bac4" value="niveaubac4" id="niveaubac4"/>
        <label for="niveaubac4">Niveau BAC + 4</label><br/>
    <p>
        <input type="radio" name="+bac4" value="superieurbac4" id="superieurbac4"/>
        <label for="superieurbac4">Supérieur à BAC + 4</label><br/>
    </fieldset>
    <p>
    <fieldset>
        <legend><b>Informations diverses</b></legend>
        <label for="couleur">Couleur favorite : </label>
        <input type="color">
    <p>
        <label for="commentaire">Commentaire supplémentaire : </label>
        <textarea name="comment" id="Textarea1"></textarea>
    </fieldset>
        <input type="submit" value="Envoyer" onClick="submit"/>
        <input type="reset" value="Réinitialiser" onClick="reset"/>
        <input type="button" value="Changer la couleur de fond"
        onClick="document.body.style.backgroundColor = 'code_couleur_souhaitée'"/>
    </form>
</body>
</html>