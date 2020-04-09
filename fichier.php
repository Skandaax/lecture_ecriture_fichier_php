<?php

//1 - Mise à jour de la date pour le site web//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

var_dump(fgets($file));

fclose($file);

//2 - Stocker les information sur le fichier Compteur.txt//

$file = fopen("compteur.txt", "r+");

$pages_vues = fgets($file); // nombre de pages vue
$pages_vues+= 1; //augmente de 1 le pages vues
fseek($file, 0); //on remet  le curseur au début des fichiers
fwrite($file, $pages_vues); //on écrit à nouveau le nombre des pages vues
fclose($file);

echo 'La page à était vue ' .$pages_vues. 'fois ';

var_dump($pages_vues);

//3- Stocker les informations dans un fichier csv//
$file = fopen("tab.csv", "w");

$tab = array (                                 
    array('Firefox', 'Chrome', 'Opera', 'IE'),  
    array('Windows', 'Linux', 'Mac OSX'),       
    array('VS Code', 'Notepad++')
 );
 
 $fp = fopen('tab.csv', 'w');
 
 foreach ($tab as $fields) {
     fputcsv($fp, $fields);
 }

 var_dump($tab);

 fclose($fp);

 //4 - Création d'un formulaire dans le fichier index.php//
 $file =fopen("cible.php", "c");
 

 $file = fopen("style.css", "c");
 

 $file = fopen("formulaire.php", "c");


 //6 - Charger des listes d'un fichier csv

 $contenu = file_get_contents("donnees_form.csv");
 echo $contenu;

 var_dump($contenu);

 //correction du 6//
$file = fopen("donnees_form.csv", "r");

$form = [];
$tab_line = "";
while($tab_line != false) {
    $tab_line = fgetcsv($file);
    if ($tab_line != false) {
        array_push($form, $tab_line);
    }
}

fclose($file);

var_dump($form);

$html = "<p>Les donnéees du formulaire : </p><ul>";
foreach($form as $form) {
    $html .= "<li>".$form[0]."</li>";
}
$html = "</ul>";
 //7 Enregistrer cette liste dans un fichier json //



















