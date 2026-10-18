<?php
// Auteur : Khadija Zahraoui
// Objectif : Connecter l'utilisateur.
// Date : 18/10/2026

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST["login"] ?? "");

    if ($login !== "") {
        $_SESSION["login"] = $login;
        setcookie("dernier_login", $login, time() + 86400, "/");
        header("Location: profil.php");
        exit;
    }
}

$dernierLogin = htmlspecialchars($_COOKIE["dernier_login"] ?? "");
?>

<form method="POST" action="login.php">
    Login :
    <input type="text" name="login" value="<?= $dernierLogin ?>" required>
    <button type="submit">Connexion</button>
</form> 