<?php
include "verify.php";
include "dbconnect.php";

// print_r($_POST);
$name = $_POST["name"];
$stadt = $_POST["stadt"];
$vorstandsvors = $_POST["vorstandsvors"];
$gruendung = $_POST["gruendung"];
$id = $_POST["id"];


$statement = $pdo->prepare("UPDATE verein SET name = ?, stadt = ?, vorstandsvors = ?, gruendung = ? WHERE verein_id = ?");
$statement->execute(array($name, $stadt, $vorstandsvors, $gruendung, $id));

header('Location: index.php');


?>