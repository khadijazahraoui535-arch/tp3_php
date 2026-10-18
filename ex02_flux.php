<?php
// Auteur : Khadija Zahraoui
// Objectif : Conditions et boucles.
// Date : 18/10/2026

require "config.php";


function mention($note) {
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo mention(18) . "<br>";
echo mention(15) . "<br>";
echo mention(11) . "<br>";


$mois = date("m");

switch ($mois) {
    case "01": $nom = "janvier"; break;
    case "02": $nom = "février"; break;
    case "03": $nom = "mars"; break;
    case "04": $nom = "avril"; break;
    case "05": $nom = "mai"; break;
    case "06": $nom = "juin"; break;
    case "07": $nom = "juillet"; break;
    case "08": $nom = "août"; break;
    case "09": $nom = "septembre"; break;
    case "10": $nom = "octobre"; break;
    case "11": $nom = "novembre"; break;
    case "12": $nom = "décembre"; break;
    default: $nom = "inconnu";
}

echo $nom . "<br>";


for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


$i = 0;
while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
}


for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo $i . " ";
}
echo "<br>";


$i = 1;
while ($i <= 12) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
    }
    $i++;
}


$i = 0;
do {
    echo $i . "<br>";
    $i += 2;
} while ($i <= 20);


?>