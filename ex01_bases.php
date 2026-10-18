<?php
// Auteur : Khadija Zahraoui
// Objectif : Variables, constantes, types et chaînes.
// Date : 18/10/2026

require "config.php";
$x = 1;
$_x = 2;
$Prix_HT = 60;
$état = "actif";

$a = "minuscule";
$A = "majuscule";

echo '$a = ' . $a . "<br>";
echo '$A = ' . $A . "<br>";

echo ETABLISSEMENT . "<br>";
echo NOTE_MIN . "<br>";
echo NOTE_MAX . "<br>";
echo SEUIL . "<br>";

var_dump(defined("SEUIL"));
var_dump(defined("INCONNUE"));

$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";


$test = 42;
$test = (string)$test;
var_dump($test);

var_dump((bool)0);
var_dump((bool)0.0);
var_dump((bool)"0");
var_dump((bool)"");
var_dump((bool)"abc");
var_dump((bool)[]);
var_dump((bool)null);

var_dump((int)3.9);
var_dump((int)"12abc");
var_dump((float)"1.5e3");
var_dump((int)true);

echo 255 . "<br>";
echo dechex(255) . "<br>";
echo decoct(255) . "<br>";
echo decbin(255) . "<br>";

$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"' . "<br>";
echo 'Voulez-vous supprimer C:\\.?' . "<br>";
echo 'Ceci n'affichera pas \n de nouvelle ligne' . "<br>";
echo 'Les variables ne seront pas $traitees $ici' . "<br>";
echo "Les variables seront $traitees $ici<br>";

echo trim("Bonjour les développeurs", "*") . "<br>";

$mot = "PHP";
for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}
?>