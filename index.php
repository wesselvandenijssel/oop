<?php
include 'vierkant.class.php';
include 'cilinder.class.php';
include 'figuur.class.php';

$Vierkant = new Vierkant(5);
echo $Vierkant->oppervlakteVierkant;
echo "<br>";

$Cilinder = new Cilinder(3, 10);
echo $Cilinder->inhoudCilinder;
echo "<br>";

$Driehoek = new Driehoek(5, 10);
echo  $Driehoek->oppervlakteDriehoek;

?>