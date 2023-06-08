<?php
session_start();
session_destroy();
header("location: /exo2/login.php");
?>