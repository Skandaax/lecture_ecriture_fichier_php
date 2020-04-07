<?php

$file = fopen("miseajour.txt", "c");

$date = date("d-m-Y");
$heure = date("H:i");
Print("la dernière mise à jour à était faite le $date à $heure");



fclose($file);

