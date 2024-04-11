<?php
$excel = fopen("voiture.csv", "r");
// while (false !==($line = fgetcsv($excel, 1000, "\t"))) {
//   // var_dump($line[1]);
//   $marque = $line[0];
//   $type = $line[1];
//   $moteur = $line[2];
//   $energie = $line[3];
//   $transmission = $line[4];
//   $couleur = $line[5];
//   // var_dump($marque); 
//   file_put_contents("voiture.json", json_encode(["marque" => $marque, "type" => $type, "moteur" => $moteur, "energie" => $energie, "transmission" => $transmission, "couleur" => $couleur]));
// }

$donnees = [];
while (false !==($line = fgetcsv($excel, 1000, "\t"))) {
  $donnees = [
    "marque" => $line[0],
    "type" => $line[1],
    "moteur" => $line[2],
    "energie" => $line[3],
    "transmission" => $line[4],
    "couleur" => $line[5]
  ];
  file_put_contents("voiture.json", json_encode($donnees, JSON_PRETTY_PRINT));
}

// $donnees = [];
// while (false !==($line = fgetcsv($excel, 1000, "\t"))) {
//   $donnees[] = [
//     "marque" => $line[0],
//     "type" => $line[1],
//     "moteur" => $line[2],
//     "energie" => $line[3],
//     "transmission" => $line[4],
//     "couleur" => $line[5]
//   ];
// }
// $json = json_encode($donnees, JSON_PRETTY_PRINT);
// file_put_contents("voiture.json", $json);