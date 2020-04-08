<?php



 $file = fopen("donnees_form.csv", "c");

 fputcsv($file, $_POST);

 fclose($file);


 var_dump($_POST);

 ?>


<head>
    <meta charset="utf-8">
    <title>Mon formulaire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="tab">
<form action="#" method="POST">
                <p>
                    <label for="nom">Votre nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
                </p>
                <p>
                    <label for="site">Votre site web</label>
                    <input type="text" id="site" name="site" placeholder="Votre site web">
                    <label for="mail">Votre mail</label>
                    <input type="text" id="mail" name="email" placeholder="Votre e:mail">
                </p>
                <p>
                    <select name="choix" size="4">
                        <OPTION>Lundi
                        <OPTION>Mardi
                        <OPTION>Mercredi
                        <OPTION>Jeudi
                        <OPTION>Vendredi
                        <OPTION>Samedi
                </p>
                <p>Note /5 : nom
                    <label for="rad0">0</label>
                    <input type="radio" id="rad0" name="note" value="0">
                    <label for="rad1">1</label>
                    <input type="radio" id="rad1" name="note" value="1">
                    <label for="rad2">2</label>
                    <input type="radio" id="rad2" name="note" value="2">
                    <label for="rad3">3</label>
                    <input type="radio" id="rad3" name="note" value="3">
                    <label for="rad4">4</label>
                    <input type="radio" id="rad4" name="note" value="4">
                    <label for="rad5">5</label>
                    <input type="radio" id="rad5" name="note" value="5">
                </p>
                </p>
                    <label for="rad0">J'aime</label>
                    <input type="checkbox" name="case" value="1">
                    <label for="rad0">Je n'aime pas</label>
                    <input type="checkbox" name="case" value="2">

                <p>
                <p> 
                
                    <label for="comment">Laissez-nous un commentaire</label><br>
                    <textarea id="comment" rows="5" cols="40"></textarea>
                </p>
                <p><input type="submit" value="Envoyer">
                </p>
            </form>
</div>

</body>
</html>