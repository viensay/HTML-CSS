<?php 

// $motentree=readline("Entrez un mot:");
// $mot = 'stop';
// while($motentree !== $mot){
//     $motentree=readline("Entrez un mot : "); 
// }
// echo 'Vous avez quitté le programme !!!';

$joursSemaine = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];

for($i = 0; $i < sizeof($joursSemaine) ; $i++){
    echo $joursSemaine[$i]. "\n";
}

$mois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];

echo "\n";

for($i = 1; $i < sizeof($mois); $i+= 2){
    echo $mois[$i] . "\n";
}

$nombre = [11,18,99,17,65220,6485,78,97,48,2,112];

echo "\n";

for($i = 0; $i < sizeof($nombre); $i++){
    if(($nombre[$i]%2) == 0){
        echo $nombre[$i] . ' est pair' . "\n";
    }
}


?>