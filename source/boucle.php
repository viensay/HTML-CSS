<?php 

// $motentree=readline("Entrez un mot:");
// $mot = 'stop';
// while($motentree !== $mot){
//     $motentree=readline("Entrez un mot : "); 
// }
// echo 'Vous avez quitté le programme !!!';

// $joursSemaine = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];

// for($i = 0; $i < sizeof($joursSemaine) ; $i++){
//     echo $joursSemaine[$i]. "\n";
// }



// echo "\n";

// for($i = 0; $i < sizeof($mois); $i+= 2){
//     echo $mois[$i] . "\n";
// }

// $nombre = [11,18,99,17,65220,6485,78,97,48,2,112];

// echo "\n";

// for($i = 0; $i < sizeof($nombre); $i++){
//     if(($nombre[$i]%2) == 0){
//         echo $nombre[$i] . ' est pair' . "\n";
//     }
// }


// $mois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
// for($i = 0; $i < sizeof($mois); $i++){
//     echo $mois[$i];
//     if($i < (sizeof($mois)-1) ){
//         echo "-";
//     }
// }

// echo "\n";

// $note = [18,13,5,9,10];

// foreach($note as $point){
//     if($point > 10){
//         echo 'Tu as réussi avec la note de ' . $point . "\n";
//     }
//     else if($point == 10){
//         echo 'Tu as eu tout pile la moitié ' . $point . "\n";
//     }
//     else{
//         echo 'Tu as raté avec la note de ' . $point . "\n";
//     }
// }

// $tabmot=[];
// $motentree="";
// $mot = 'stop';
// $compteur = 0;
// while($motentree !== $mot){
//     $motentree=readline("Entrez un mot ou taper \"stop\" pour arrêter: "); 
//     $tabmot[$compteur] = $motentree;
//     $compteur++;
// }

// foreach($tabmot as $motaffiche){
//     if($motaffiche != 'stop'){
//         echo $motaffiche . ",";
//     }
// }

// $classe = [
//     [
//         'firstname' => "Julien",
//         'lastname' => "Dunia",
//         'note' => [8,15,12]
//     ],
//     [
//         'firstname' => "Hakima",
//         'lastname' => "Darmouch",
//         'note' => [18,5,10]
//     ],
//     [
//         'firstname' => "Christian",
//         'lastname' => "Bale",
//         'note' => [7,19,5]
//     ]

//     ];

//     foreach($classe as $tableauclasse){
//         foreach($tableauclasse as $nomi => $valeur){
//             if(is_array($valeur)){
//                 echo $nomi . " : ";
//                 $somme = 0;
//                 foreach($valeur as $pointpp){
//                     $somme += $pointpp;
//                 }
//                 echo 'Moyenne ' . ($somme/3) . "\n";
//             }
//             else{
//                 echo $nomi . ' : ' . $valeur . "\n";
//             }
//         }
        
//         echo "\n";
//     }



?>