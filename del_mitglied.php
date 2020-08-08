<?php

include "verify.php";
include "dbconnect.php";
$id=$_GET["id"];



$statement = $pdo->prepare("DELETE FROM mitglied WHERE mitglied_id = ?");
$statement->execute(array($id));

header('Location: index.php');


?>