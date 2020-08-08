<?php
include "verify.php";
include "dbconnect.php";

 print_r($_POST);

$vereinID = $_POST["vereinform"];
$mitgliedID = $_POST["mitgliedform"];
$bezahlstatus = $_POST["bezahlt"];





$statement = $pdo->prepare("INSERT INTO vereinmitglied (verein_id,mitglied_id,bezahlt) VALUES (?,?,?)");
$statement->execute(array($vereinID,$mitgliedID,$bezahlstatus));

header('Location: index.php');


?>