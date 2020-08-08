<?php
include "verify.php";

include "dbconnect.php";

 print_r($_POST);

$name = $_POST["nachname"];
$vorname = $_POST["vorname"];
$geschlecht = $_POST["geschlecht"];
$geb_dat = $_POST["geb_dat"];
$strasse = $_POST["strasse"];
$nr = $_POST["hausnummer"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];





$statement = $pdo->prepare("INSERT INTO mitglied (name,vorname,geschlecht,geb_dat,strasse,nr,plz,ort) VALUES (?,?,?,?,?,?,?,?)");
$statement->execute(array($name, $vorname, $geschlecht, $geb_dat, $strasse, $nr, $plz, $ort));

header('Location: index.php');


?>