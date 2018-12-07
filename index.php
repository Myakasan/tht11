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
      $json = file_get_contents('data.json');
      $obj = json_decode($json);

      echo "il fait ".$obj->temperature." °C";
      echo " Avec ".$obj->humidite." % d'humidité";
      echo "<br>";

      $date = date("d-m-Y");
      $heure = date("H:i");
      echo "Nous sommes le " .$date. " et il est ".$heure;
      echo "<br>";

      $bargraph_height = 161 + $obj->temperature * 4;
      $bargraph_top = 315 - $obj->temperature * 4;

      $filename = 'data.json';
       {
      echo "La météo à été mise à jour le : " . date("d-m-Y H:i:s.", filectime($filename));
      }
     ?>

     <div id="thermometer">
      <div id="bargraph" style="height:<?php echo $bargraph_height; ?>px; top:<?php echo $bargraph_top; ?>px;">
      </div>
     </div>
  </body>
</html>
