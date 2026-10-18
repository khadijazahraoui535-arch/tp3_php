<?php
// Auteur : Khadija Zahraoui
// Objectif : Traiter le formulaire GET.
// Date : 18/10/2026

$nom = htmlspecialchars($_GET["nom"] ?? "");
$prenom = htmlspecialchars($_GET["prenom"] ?? "");
$sexe = $_GET["sexe"] ?? "M";

if ($sexe == "F") {
    echo "Bonjour Madame $prenom $nom";
} else {
    echo "Bonjour Monsieur $prenom $nom";
}
?>