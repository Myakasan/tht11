<?php

$temperature = $_POST['temperature'];

$monFichier = fopen('temperature.txt', 'r+');
fputs($monFichier, $temperature);
fclose($monFichier);


echo "Il fait ".$temperature." °C";
