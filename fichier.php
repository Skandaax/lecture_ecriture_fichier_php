<?php

//Mise à jour//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

var_dump(fgets($file));

fclose($file);

//Compteur//

$file = fopen("compteur.txt", "c+");

$pages_vues = fgets($file);
$pages_vues++;
fseek($file, 0);
fwrite($file, $pages_vues);
fclose($file);

echo "La page à était vue " .$pages_vues. "fois ";





