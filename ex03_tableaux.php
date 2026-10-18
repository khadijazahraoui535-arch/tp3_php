<?php
// Auteur : Khadija Zahraoui
// Objectif : Manipuler les tableaux.
// Date : 18/10/2026

require_once "config.php";
require_once "exo2_flux.php";

$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

$modules = ["PHP", "Algorithmique", "Base de données"];

foreach ($modules as $module) {
    echo $module . "<br>";
}

echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2] . "<br>";


echo "<table border='1'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";

foreach ($notes as $nom => $note) {
    $couleur = ($note < SEUIL) ? "red" : "black";

    echo "<tr style='color:$couleur'>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";

$somme = 0;
$meilleure = 0;
$faible = 20;
$effectifs = [];

foreach ($notes as $nom => $note) {
    $somme += $note;

    if ($note > $meilleure) $meilleure = $note;
    if ($note < $faible) $faible = $note;

    $m = mention($note);
    if (!isset($effectifs[$m])) $effectifs[$m] = 0;
    $effectifs[$m]++;
}

$moyenne = $somme / count($notes);

echo "Somme : $somme<br>";
echo "Moyenne : $moyenne<br>";
echo "Meilleure note : $meilleure<br>";
echo "Plus faible note : $faible<br>";

echo "Vérification : " . array_sum($notes) . "<br>";
echo "Nombre : " . count($notes) . "<br>";
echo "Maximum : " . max($notes) . "<br>";
echo "Minimum : " . min($notes) . "<br>";

foreach ($effectifs as $m => $nombre) {
    echo "$m : $nombre<br>";
}


function afficher($tab) {
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
}

$tab = $notes;
ksort($tab);
afficher($tab);

$tab = $notes;
arsort($tab);
afficher($tab);

$tab = $notes;
krsort($tab);
afficher($tab);

$tab = $notes;
asort($tab);
afficher($tab);

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);
?>