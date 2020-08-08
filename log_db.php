<?php




 //print_r($_POST);

$email = $_POST["email"];
$pw = $_POST["pw"];

include "dbconnect.php";

$statement = $pdo->prepare("SELECT * FROM login WHERE email =?");
$statement->execute(array($email));

$datensatz =  $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($datensatz);

if (password_verify($pw,$datensatz[0]["passwort"]))
{
//echo "eingeloggt";

session_start();
$_SESSION["email"] = $email;
header('Location: index.php');

}else{

    //echo "fehler";
    header('Location: login.php?pwm=wrong');
}







?>