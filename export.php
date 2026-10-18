<?php
// Auteur : Khadija Zahraoui
// Objectif : Exporter les notes en JSON.
// Date : 18/10/2026

$fichier = "data/notes.csv";

if (!file_exists($fichier)) {
    exit("Aucune note à exporter.");
}

$fp = fopen($fichier, "r");
$resultats = [];

while (($ligne = fgetcsv($fp, 1000, ";")) !== false) {
    if (count($ligne) < 3) continue;

    $nom = $ligne[0];
    $info = (float)$ligne[1];
    $math = (float)$ligne[2];

    $resultats[] = [
        "nom" => $nom,
        "notes" => ["info" => $info, "math" => $math],
        "moyenne" => ($info + $math) / 2
    ];
}

fclose($fp);

$json = json_encode($resultats, JSON_PRETTY_PRINT);
file_put_contents("data/notes.json", $json);

$contenu = file_get_contents("data/notes.json");
$decoded = json_decode($contenu, true);

echo "<pre>";
print_r($decoded);
echo "</pre>";

echo "<pre>";
print_r(serialize($resultats));
echo "</pre>";
 
?>