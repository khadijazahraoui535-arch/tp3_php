<?php
// Auteur : Khadija Zahraoui
// Objectif : Vérifier et enregistrer les notes.
// Date : 18/10/2026

require "config.php";

if (
    !isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"]) ||
    trim($_POST["nom"]) === ""
) {
    exit("Erreur : veuillez remplir tous les champs.");
}

$nom = trim($_POST["nom"]);
$info = (float) $_POST["note_info"];
$math = (float) $_POST["note_math"];

if (
    $info < NOTE_MIN || $info > NOTE_MAX ||
    $math < NOTE_MIN || $math > NOTE_MAX
) {
    exit("Erreur : les notes doivent être entre 0 et 20.");
}

$moyenne = ($info + $math) / 2;

if (!is_dir("data")) {
    mkdir("data");
}

$fichier = fopen("data/notes.csv", "a");
fputcsv($fichier, [$nom, $info, $math], ";");
fclose($fichier);

echo "Nom : " . htmlspecialchars($nom) . "<br>";
echo "Note Informatique : $info<br>";
echo "Note Mathématiques : $math<br>";
echo "Moyenne : $moyenne<br>";

?>