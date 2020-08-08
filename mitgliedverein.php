<?php
include "verify.php";
include "dbconnect.php";
$statement = $pdo->prepare("SELECT verein_id, name FROM verein");
$statement->execute(array());
$vereine = $statement->fetchAll(PDO::FETCH_ASSOC);
/*echo "<pre>";
print_r ($vereine);
echo "</pre>";
*/
$statement = $pdo->prepare("SELECT mitglied_id, name, vorname FROM mitglied");
$statement->execute(array());
$mitglieder = $statement->fetchAll(PDO::FETCH_ASSOC);
/*echo "<pre>";
print_r ($mitglieder);
echo "</pre>";
*/

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Vereinsverwaltungsoftware</title>
<!-- Bootstrap CSS einbinden-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
<!-- Formular -->
 <form class="" action="mitgliedvereineintrag.php" method="post">
     <br>Verein auswählen<br>
<select name="vereinform">
    <option selected disabled value="-1">Verein auswählen</option>
 <?php   for($i=0;$i<count($vereine); $i++) {
echo "<option value=\"" . $vereine[$i]["verein_id"] . "\">" . $vereine[$i]["verein_id"] . " " . $vereine[$i]["name"] . "</option>";
 } ?>
</select>
<br>Mitglied hinzufügen<br>
<select name="mitgliedform">
    <option selected disabled value="-1">Mitglied hinzufügen</option>
 <?php   for($i=0;$i<count($mitglieder); $i++) {
echo "<option value=\"" . $mitglieder[$i]["mitglied_id"] . "\">" . $mitglieder[$i]["mitglied_id"] . " " . $mitglieder[$i]["name"] . ", " . $mitglieder[$i]["vorname"] . "</option>";
 } ?>
</select>
<br>
<input type="radio" name="bezahlt" value="1" checked>
      <label >bezahlt</label><br>
      <input type="radio"  name="bezahlt" value="0">
      <label >nicht bezahlt</label><br>
<input type="submit" value="eintragen">
 </form>

</div>
<!--2. Spalte GRID-->

<div class="col-sm-12 col-md-6">
  



</div>
</div>
</div>

    <!-- Bootstrap JS einbinden -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>