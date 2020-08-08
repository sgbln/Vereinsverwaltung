<?php


include "dbconnect.php";

 print_r($_POST);

$email = $_POST["email"];
$pw = $_POST["pw"];
$pw_wh = $_POST["pw_wh"];


if($pw == $pw_wh) {

 $pw_hash = password_hash ($pw, PASSWORD_DEFAULT);
 //echo $pw_hash;

 $statement = $pdo->prepare("INSERT INTO login (email,passwort) VALUES (?,?)");
 $statement->execute(array($email,$pw_hash));

 //$wahr = password_verify("test", $pw_hash);
//var_dump($wahr);
}else{

    header('Location: reg.php?pwm=wrong');
}





//header('Location: index.php');


?>