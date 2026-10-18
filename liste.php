<?php
// Auteur : Khadija Zahraoui
// Objectif : Afficher les notes enregistrées.
// Date : 18/10/2026

require_once "config.php";
require_once "exo2_flux.php";

$fichier = "data/notes.csv";

if (!file_exists($fichier)) {
    exit("Aucune note enregistrée.");
}

$fp = fopen($fichier, "r");

if (!$fp) {
    exit("Erreur d'ouverture du fichier.");
}

echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Info</th><th>Math</th><th>Moyenne</th><th>Mention</th></tr>";

$somme = 0;
$nombre = 0;

while (($ligne = fgetcsv($fp, 1000, ";")) !== false) {
    if (count($ligne) < 3) continue;

    $nom = $ligne[0];
    $info = (float)$ligne[1];
    $math = (float)$ligne[2];
    $moyenne = ($info + $math) / 2;

    $somme += $moyenne;
    $nombre++;

    echo "<tr>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$info</td><td>$math</td>";
    echo "<td>$moyenne</td>";
    echo "<td>" . mention($moyenne) . "</td>";
    echo "</tr>";
}

fclose($fp);
echo "</table>";

if ($nombre > 0) {
    echo "Moyenne générale : " . ($somme / $nombre);
}
?> 