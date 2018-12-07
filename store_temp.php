<?php

$temperature = $_POST['temperature'];

$monFichier = fopen('data.json', 'r+');
fputs($monFichier, $temperature);
fclose($monFichier);


echo "Il fait ".$temperature." °C";
