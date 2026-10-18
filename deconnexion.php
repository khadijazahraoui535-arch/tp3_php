<?php
// Auteur : Khadija Zahraoui
// Objectif : Déconnecter l'utilisateur.
// Date : 18/10/2026

session_start();
session_unset();
session_destroy();

header("Location: login.php");
exit;
?>