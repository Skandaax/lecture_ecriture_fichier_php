<?php

//Mise à jour//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

var_dump(fgets($file));

fclose($file);

//Compteur//

$file = fopen("compteur.txt", "c+");

$pages_vues = fgets($file); // nombre de pages vue
$pages_vues++; //augmente de 1 le pages vues
fseek($file, 0); //on remet  le curseur au début des fichiers
fwrite($file, $pages_vues); //on écrit à nouveau le nombre des pages vues
fclose($file);

echo 'La page à était vue ' .$pages_vues. 'fois ';





