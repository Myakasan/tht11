<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Température</title>
    <link rel="stylesheet" href="./style/main.css">
  </head>
  <body>
    <h1>Température</h1>
    <?php
      $json = file_get_contents('data.txt');
      $obj = json_decode($json);
      echo "il fait ".$obj->temperature." °C";
      echo " Avec ".$obj->humidite." % d'humidité";
      echo "<br>";

      $date = date("d-m-Y");
      $heure = date("H:i");
      echo "Nous sommes le " .$date. " et il est ".$heure;
      echo "<br>";
     ?>

     <img src="./img/thermometer.jpg" alt="termometer">
  </body>
</html>
