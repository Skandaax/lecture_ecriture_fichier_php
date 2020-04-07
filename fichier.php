<?php

//Mise à jour//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

//Compteur//
$file = fopen("compteur.txt", "c");


var_dump(fgets($file));


fclose($file);

