<?php
if($_GET) {
$pwm = $_GET["pwm"];
}
  if(!$_GET){
  $pwm="0";
  } 
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <?php 
   include 'menu.php';
   ?>
   <div class="container">
   <h1>Login</h1>

    

    

    <form action="log_db.php" method="post">

      <p>Email*<br>
        <input type="email" name="email" value=""  placeholder="meine@adresse.de" required>
      </p>
      <p>Passwort*<br>
        <input type="password" name="pw" value="" placeholder="*****" required>
      </p>
      

      
      <p><input type="submit" name="" value="einloggen"></p>


    </form>

    <?php

if($pwm == "wrong") {

    echo "Passwort falsch";
}else{

  
}
?>


</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
