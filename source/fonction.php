<?php
// $tabIndexe = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'sexe' => 'F',
//     'dateOfBirth' => "24/10/1995",
//     'city'=> 'London'
// ];
// var_dump($tabIndexe);


function somme($tab){
    $somme = 0;
    foreach($tab as $element){
        $somme += $element;
    }
    echo 'La somme est ' . $somme;
    return $somme;
}


function moyenne($tab){
    $somme = 0;
    foreach($tab as $element){
        $somme += $element;
    }
    echo 'La moyenne est ' . $somme/(sizeof($tab));
    return $somme/(sizeof($tab));
}

function demandeUtilisateur(){
    $tab=[];
    $nombre = readline('Veuillez introduire un nombre ou stop pour arrêter : ');
    while($nombre != 'stop'){
        $tab[] = (int)$nombre;
        $nombre = readline('Veuillez introduire un nombre ou stop pour arrêter : ');
    }
    somme($tab);
    echo "\n";
    moyenne($tab);
}

demandeUtilisateur();



?>