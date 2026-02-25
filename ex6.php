<?php
$personne = [
"nom" => "Majda",
"age" => 18,
"prix" => 39.99,
"statut" => true
];
var_dump($personne);

echo "<br>";

var_dump(is_string($personne["nom"]));
var_dump(is_int($personne["age"]));
var_dump(is_float($personne["prix"]));
var_dump(is_bool($personne["statut"]));
?>
