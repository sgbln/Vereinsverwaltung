<?php

include "verify.php";
include "dbconnect.php";

// print_r($_POST);
$name = $_POST["name"];
$stadt = $_POST["stadt"];
$vorstandsvors = $_POST["vorstandsvors"];
$gruendung = $_POST["gruendung"];



$statement = $pdo->prepare("INSERT INTO verein (name,stadt,vorstandsvors,gruendung) VALUES (?,?,?,?)");
$statement->execute(array($name, $stadt, $vorstandsvors, $gruendung));

header('Location: index.php');


?>