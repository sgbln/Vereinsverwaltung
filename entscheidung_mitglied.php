<?php
include "verify.php";
$id = $_GET["id"];


?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Löschen</title>
</head>
<body>
    <h1>Wollen Sie wirklich löschen?</h1>
    <h3>
    <a href="<?php echo "del_mitglied.php?id=" . $id ?>">Ja</a> oder <a href="index.php">Nein</a>
    </h3>
</body>
</html>