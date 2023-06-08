<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
}

if (isset($_SESSION["cp"])) {

    $_SESSION["cp"] = $_SESSION["cp"] + 1;
} else {
    $_SESSION["cp"] = 1;
}
$cp = $_SESSION["cp"];

$Date = date('d-m-Y à H:i:s');

$_SESSION["history"][$cp] = $Date ;

echo "bonjour Mr." . $_SESSION["login"] . ", vous avez visité cette page " . $_SESSION["cp"] . " fois, voici les details:";
echo "<ul>";
for ($i = 1; $i <= $cp; $i++) {
    echo "<li>" . $_SESSION["history"][$i] . "</li><br/>";
}
echo "</ul>";
echo "<a href=deconnection.php/>deconnection</a>";


?>
