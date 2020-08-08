<?php
include "verify.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <title>Formular Verein anlegen</title>
</head>
<body>

<?php 
   include 'menu.php';
   ?>
<div class="container">
   
         


    <form action="eintragverein.php" method="post">
        <fieldset>
            <h1>Verein anmelden</h1>

            <p><label for="vereinsname">Vereinsname*</label></p>
            <p><input type="text" name="name" id="vereinsname" placeholder="Vereinsname" required></p>
            <p><label for="vereinsort">Vereinsort*</label></p>
            <p><input type="text" name="stadt" id="vereinsort" placeholder="Ort" required></p>
            <p><label for="vereinsvors">Vereinsvorsitzende/r</label></p>
            <p><input type="number" name="vorstandsvors" id="vereinsvors" placeholder="Mitgliedsnummer" ></p>
            <p><label for="gruendung">Gründungsdatum*</label></p>
            <p><input type="date" name="gruendung" id="gruendung" required></p>
            <p><input type="submit" value="eintragen"></p>
        <br>
            
    
</form>

</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>