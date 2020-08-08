<?php
session_start();
if (!isset ($_SESSION["email"])) {
die("du musst dich einloggen. <a href='login.php'>Login</a>");
}
?>