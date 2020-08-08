<?php

include "verify.php";
include "dbconnect.php";
$id=$_GET["id"];


// Verein löschen aus Verein-Tabelle
$statement = $pdo->prepare("DELETE FROM verein WHERE verein_id = ?");
$statement->execute(array($id));


// Löscht Mitglied aus vereinmitglied Tabelle
$statement = $pdo->prepare("DELETE FROM vereinmitglied WHERE verein_id = ?");
$statement->execute(array($id));

header('Location: index.php');


?>