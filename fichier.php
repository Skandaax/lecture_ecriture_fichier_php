<?php

//Mise à jour de la date pour le site web//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

var_dump(fgets($file));

fclose($file);

//Stocker les information sur le fichier Compteur.txt//

$file = fopen("compteur.txt", "r+");

$pages_vues = fgets($file); // nombre de pages vue
$pages_vues++; //augmente de 1 le pages vues
fseek($file, 0); //on remet  le curseur au début des fichiers
fwrite($file, $pages_vues); //on écrit à nouveau le nombre des pages vues
fclose($file);

echo 'La page à était vue ' .$pages_vues. 'fois ';

var_dump($pages_vues);

//Stocker les informations dans un fichier csv//
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













