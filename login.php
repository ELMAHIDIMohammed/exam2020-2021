<form method="POST" action="#">
    <fieldset>
        <legend>Page d'authentifiacation</legend>
        Login<br />
        <input type="text" name="login" <?php
                                        if (isset($_COOKIE["login"]))
                                            echo "value=" . $_COOKIE["login"] . "";

                                        ?> required /><br />
        Mot de passe<br />
        <input type="password" name="password" <?php
                                                if (isset($_COOKIE["password"]))
                                                    echo "value=" . $_COOKIE["password"] . "";

                                                ?> required /><br />
        <input type="submit" value="valider" />
    </fieldset>
</form>

<?php
session_start();

if (isset($_POST["login"]) && isset($_POST["password"])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $duree = time() + 30 * 24 * 3600;

    if ($login == "Admin" && $password == "admin123") {

        setcookie("login", $login, $duree);
        setcookie("password", $password, $duree);
        $_SESSION["login"] = $login;
        header("location: admin.php");
    } else if ($login == "User" && $password == "user123") {
        setcookie("login", $login, $duree);
        setcookie("password", $password, $duree);
        $_SESSION["login"] = $login;
        header("location: user.php");
    } else {
        echo "invalide password or login";
    }
}

?>