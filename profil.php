<?php
// Auteur : Khadija Zahraoui
// Objectif : Afficher le profil connecté.
// Date : 18/10/2026

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

echo "Bienvenue " . htmlspecialchars($_SESSION["login"]);
echo "<br><a href='deconnexion.php'>Déconnexion</a>";
?>