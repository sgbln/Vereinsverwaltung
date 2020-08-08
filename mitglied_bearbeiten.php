<?php
include "verify.php";
include "dbconnect.php";

// print_r($_POST);

$name = $_POST["name"];
$vorname = $_POST["vorname"];
$geschlecht = $_POST["geschlecht"];
$geb_dat = $_POST["geb_dat"];
$strasse = $_POST["strasse"];
$nr = $_POST["nr"];
$plz = $_POST["plz"];
$ort = $_POST["ort"];
$id = $_POST["id"];



$statement = $pdo->prepare("UPDATE mitglied SET name = ?,vorname = ?,geschlecht = ?,geb_dat = ?,strasse =?,nr =?,plz=?,ort=? WHERE mitglied_id=?");
$statement->execute(array($name, $vorname, $geschlecht, $geb_dat, $strasse, $nr, $plz, $ort, $id));

header('Location: index.php');


?>