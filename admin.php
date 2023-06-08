<?php
session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] != "Admin"){
    header("location: login.php");
}
echo "hello". $_SESSION["login"];
echo "<a href=deconnection.php/>deconnection</a>";
?>