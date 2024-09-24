<?php
    // $heure = (int)readline('Entrez une heure : ');
    // if(!(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18))){
    //     echo "Le magasin sera ouvert à $heure heures";
    // }else{
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }

    $users1=[
        'firstname'=>'Will',
        'lastname'=>'Smith',
        'sexe'=>'M',
        'age'=>53, 
        'vaccinated'=>true
    ];

    $users2 =[
        'firstname'=>'Lara',
        'lastname'=>'Croft',
        'sexe'=>'F',
        'age'=>17, 
        'vaccinated'=>false
    ];

    $users3 = [
        'firstname'=> 'Marion',
        'lastname'=>'Cotillard',
        'sexe'=>'F',
        'age'=>46, 
        'vaccinated'=>true
    ];

    $test = $users1;

    if($test['age'] >= 18 && $test['vaccinated'] ) {
        echo 'Bienvenue dans le club ' . $test['firstname'] . ' ' . $test['lastname']. '!'. "\n";
        if($test['sexe'] == 'M'){
            echo 'Prenez un bracelet bleu' . "\n" ;
        }
        else{
            echo 'Prenez un bracelet rose'. "\n";
        }
    }




?>