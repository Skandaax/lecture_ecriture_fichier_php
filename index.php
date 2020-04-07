<?php

require "fichier.php";



?>


<head>
    <meta charset="utf-8">
    <title>Mon formulaire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="tab">
<form action="cible.php"metthode="POST">
    <fieldset>
        <legend>Vos coordonnées </legend>
        <p>&nbsp;</p>
        <label for="Champsnom">Votre nom</label>
        <input type="text" id="champs_nom">
        <label for="Champsprenom">Votre prénom</label>
        <input type="text" id="champs_prenom">
        <p>&nbsp;</p>
        <label for="Champsemail">Votre email</label>
        <input type="text" id="champs_email">
        <p>&nbsp;</p>
        <label for="Commentaire">Ecriver votre article</label>    
        <textarea type="champscommentaire"></textarea> 
        <p>&nbsp;</p>
    </fieldset>
        <p>&nbsp;</p>
    <fieldset >
        <select name="choix" class="select">
            <option value="choix">Choix 1</option>
            <option value="choix">Choix 2</option>
            <option value="choix">Choix 3</option>
            <option value="choix">Choix 4</option>
            <option value="choix">Choix 5</option>
        </select><br>
    </fieldset>
        <p>&nbsp;</p>
        <p><input type="submit" value="Ajouter">
</form>
</div>

</body>
</html>