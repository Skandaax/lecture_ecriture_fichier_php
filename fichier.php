<?php

$file = fopen("miseajour.txt", "c");

fwrite($file, " La mise a jour à étais faite le:");

var_dump(fgets($file));


fclose($file);

