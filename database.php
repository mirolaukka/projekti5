<?php


$enimi = $_GET["etunimi"];
$snimi = $_GET["sukunimi"];
$losoite = $_GET["lahiosoita"];
$postinro = $_GET["postinumero"];
$postitp = $_GET["postitoimipaikka"];
$maa = $_GET["maa"];
$puh = $_GET["puhelinnumero"];
$sposti = $_GET["sahkoposti"];

$palvelin = "localhost";
$kayttaja = "root";
$salasana = "root";
$tietokanta = "lomake";
$portti = 8889;


$link = mysqli_connect($palvelin, $kayttaja, $salasana, $tietokanta, $portti);
if(mysli_connect_error()){
  die("Tietokantaan ei saatu yhteyttä")
}


$kysely ="";//SQL here

if (mysql_query($link, $kysely)){
  echo "Tieodstot päivitetty";
} else {
  echo "Virhe: " . $kysely . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>
