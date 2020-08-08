<?php
include "verify.php";
include "dbconnect.php";

$id = $_GET["id"];
$statement = $pdo->prepare("SELECT vereinmitglied.verein_id, vereinmitglied.mitglied_id, vereinmitglied.bezahlt, mitglied.vorname, mitglied.name, verein.name AS v_name
FROM vereinmitglied INNER JOIN mitglied
ON vereinmitglied.mitglied_id = mitglied.mitglied_id
INNER JOIN verein
ON vereinmitglied.verein_id = verein.verein_id
WHERE vereinmitglied.verein_id = ?");

$statement->execute(array($id));
$vereinmitglieder = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r ($vereinmitglieder);
// echo "</pre>";






?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mitglieder Überblick</title>
<!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="fa/css/all.css" rel="stylesheet">
    <link href="fa/css/custom.css" rel="stylesheet">
</head>
<body>
   
   <?php 
   include 'menu.php';
   ?>
   <div class="container">
     <!-- neue Zeile GRID-->
<div class="row">

<!--1. Spalte GRID-->
  <div class="col-sm-12 col-md-6">

   <ul class="list-group">
     <li class="list-group-item"><strong>
       
     <?php 
     
     if (!empty($vereinmitglieder)) {

        echo $vereinmitglieder[0]["v_name"] . "</strong>";

     }
     else {

        echo "<strong>Noch keine Mitglieder vorhanden</strong>";

     }
     ?>
     
     
    
    
    </li>
    <?php
   for ($i=0;$i<count($vereinmitglieder);$i++){
    if (($vereinmitglieder[$i]["bezahlt"]) == "0") {
     echo "<li class=\"list-group-item\">"
     . "<i style=\"color:red;\" class=\"fab fa-creative-commons-nc-eu\"></i> "
     . $vereinmitglieder[$i]["vorname"] . " " 
     . $vereinmitglieder[$i]["name"] . " "
     . "<i class=\"float-right\"><i style=\"color:red;\" class=\"fab fa-creative-commons-nc-eu\"></i></i>" 
     . "<form class=\"float-right\" action=\"bezahlt.php\" method=\"post\">"
     . "bezahlt "
     . "<input type=\"radio\" name=\"bezahlt\" value=\"1\">"
     . " nicht bezahlt "
     . "<input type=\"radio\" name=\"bezahlt\" value=\"0\" checked>"
     . " <input type=\"hidden\" name=\"verein_id\" value=$id>"
     . " <input type=\"hidden\" name=\"mitglied_id\" value=\""
     . $vereinmitglieder[$i]["mitglied_id"] . "\">"
     . "<input type=\"submit\" value=\"ok\">"
     . "</form></li>";

   } else {
echo "<li class=\"list-group-item\">"
. "<i style=\"color:green;\" class=\"fas fa-euro-sign\"></i> "
. $vereinmitglieder[$i]["vorname"] . " " 
. $vereinmitglieder[$i]["name"] . " "
. "<i class=\"float-right\" ><i style=\"color:green;\" class=\"fas fa-euro-sign\"></i></i>" 
. "<form class=\"float-right\" action=\"bezahlt.php\" method=\"post\">"
     . "bezahlt "
     . "<input type=\"radio\" name=\"bezahlt\" value=\"1\" checked>"
     . " nicht bezahlt "
     . "<input type=\"radio\" name=\"bezahlt\" value=\"0\">"
     . " <input type=\"hidden\" name=\"verein_id\" value=$id"
     . " <input type=\"hidden\" name=\"mitglied_id\" value=\""
     . $vereinmitglieder[$i]["mitglied_id"] . "\">"
     . "<input type=\"submit\" value=\"ok\">"
     . "</form> </li>";
}
}
    ?>
</ul>


</div>
<!--2. Spalte GRID-->

<!-- <div class="col-sm-12 col-md-6">
  
<ul class="list-group">
<li class="list-group-item"><strong>Mitglieder</strong></li>
     
  
</ul>

</div>

-->
</div>

</div>

    <!-- Bootstrap JS einbinden -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>