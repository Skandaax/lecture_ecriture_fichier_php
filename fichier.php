<?php

//Mise à jour//
$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le: ".PHP_EOL);

//Compteur//
if(file_exists("compteur.txt"))
{
    $compteur_f = fopen('"compteur.txt", "c"');
    $compte = fgets($compteur_f);
}else
{
    $compteur_f = fopen('compteur.txt', "c");
    $compte = 0;
}

if(!isset($session['compteur_page']))
{
    $session['compteur_page'] = 'visite';
    $compte++;
    fseek($compteur_f, 0);
    fputs($compteur_f, $compte);
}

fclose($compteur_f);
echo '<strong>' .$compte. '</strong> visites.';




var_dump(fgets($file));


fclose($file);

