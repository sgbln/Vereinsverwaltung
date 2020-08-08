<?php
include "verify.php";


include "dbconnect.php";
$statement = $pdo->prepare("SELECT * FROM verein");
$statement->execute(array());
$vereine = $statement->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r ($vereine);
//echo "</pre>";

$statement = $pdo->prepare("SELECT * FROM mitglied");
$statement->execute(array());
$mitglieder = $statement->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";
//print_r ($mitglieder);
//echo "</pre>";




?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vereinsverwaltungsoftware</title>
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
     <li class="list-group-item"><strong>Vereine</strong></li>
     <?php for($i=0;$i<count($vereine); $i++) {
  echo "<li class=\"list-group-item\">" . 
  $vereine[$i]["name"] . 
  "<a class=\"float-right\" href=\"entscheidung.php?id=" . 
  $vereine[$i]["verein_id"] .
  "\"> <i class=\"fas fa-trash-alt abstand_icon\"></i></a>" . 
  " <a class=\"float-right\" href=\"formverein_bearbeiten.php?id=" .
   $vereine[$i]["verein_id"] . 
   "\"><i class=\"fas fa-edit abstand_icon\"></i></a>" . 
  " <a class=\"float-right\" href=\"verein_overview.php?id=" . 
   $vereine[$i]["verein_id"] .
  "\"><i class=\"fas fa-user-friends abstand_icon\"></i></a>" .
  "</li>";
      } 
      ?>
  
</ul>

</div>
<!--2. Spalte GRID-->

<div class="col-sm-12 col-md-6">
  
<ul class="list-group">
<li class="list-group-item"><strong>Mitglieder</strong></li>
     <?php for($i=0;$i<count($mitglieder); $i++) {?>
  <li class="list-group-item"><?php echo $mitglieder[$i]["name"].", ".$mitglieder[$i]["vorname"] . " - " .$mitglieder[$i]["plz"] ." " . $mitglieder[$i]["ort"] ."<a class=\"float-right\" href=\"entscheidung_mitglied.php?id=" . $mitglieder[$i]["mitglied_id"] .
            "\"> <i class=\"fas fa-trash-alt abstand_icon\"></i></a>" . "<a class=\"float-right\" href=\"formmitglied_bearbeiten.php?id=" .
  $mitglieder[$i]["mitglied_id"] . "\"><i class=\"fas fa-edit abstand_icon\"></i></a>"  ?></li>
     <?php } ?>
  
</ul>

</div>
</div>
<div class="row">

<div class="col-sm-12 col-md-6">
  
<ul class="list-group">

<!--
<li class="list-group-item"><strong>Verein</strong></li>
?php for($i=0;$i<count($vereine); $i++) {
   if($vereine[$i]["verein_id"]==$vereinmitglied[$i]["verein_id"]) {
    echo $vereinmitglied[$i]["verein_id"] . " " . $vereine[$i]["name"];
    echo $mitglieder[$i]["name"];
   
    if($mitglieder[$i]["mitglied_id"]==$vereinmitglied[$i]["mitglied_id"]) { 
    echo $mitglieder[$i]["name"];
    }}    
   
    }
      ?
  


for($j=0;$j<count($mitglieder); $j++) {
     
     

  echo "<li class=\"list-group-item\"><strong> Vereins ID " . $vereine[$i]["Vereins_ID"] . " " . $mitgliederverein[$i]["Vereins_ID"] . $vereine[$i]["Vereinsname"] . "</strong></li>";
  
    if (($mitgliederverein[$i]["Vereins_ID"]) === ($mitgliederverein[$i]["Mitglieds_Nr"])) {
      for($j=0;$j<count($mitgliederverein); $j++) {
  echo "<li class=\"list-group-item\"><strong> Mitglieds Nr " . $mitgliederverein[$j]["Mitglieds_Nr"] . $mitglieder[$j]["Nachname"] . "</strong></li>";
  }}
-->


</ul>

</div>

</div>
</div>

    <!-- Bootstrap JS einbinden -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>