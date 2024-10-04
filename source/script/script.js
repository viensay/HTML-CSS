// let vaccine = true;
// let majeur = true;

// if (vaccine && majeur){
//     document.write('Vous êtes vacciné et majeur !');
// }
// else{
//     document.write('Vous n\'êtes pas majeur et vacciné ');
// }

// let permis = true;
// let velo = true;

// document.write('<br>');

// if(permis || velo){
//     document.write('Vous pouvez circuler');
// }
// else{
//     document.write('Vous ne pouvez pas circuler');
// }

// let vehicule = [
//     ["Audi"," Grise"], 
//     ["Fiat"," Noire"],
//     ["Opel","Blanche"]
// ];

// alert('Le modèle de ma voiture est ' + vehicule[2][0] + ' et de couleur ' + vehicule[2][1]);

// let prenoms= ["Jean", "Paul", "Jacques", "Philippe"];
// alert(prenoms);

// prenoms.push("Eric");

// alert(prenoms);

// prenoms.unshift("Ariel");
// alert(prenoms);

// prenoms.shift();
// alert(prenoms);

// prenoms.pop();
// alert(prenoms);


// let nombre = [5,12,8,130,44]

// console.log('Avec la boucle for : ' + "\n");

// for(let i = 0 ; i < nombre.length ; i++){
//     console.log(nombre[i]);
// }

// console.log("\n");
// console.log('Avec la boucle foreach : ' + "\n");

// nombre.forEach(element => {
//     console.log(element);
// });

// console.log("\n");
// console.log('On parcours la table à l\'envers');

// for(let i = nombre.length-1  ; i >= 0 ; i--){
//     console.log(nombre[i]);
// };


function trouverMax(tableau){
    let nombre = tableau[0];
    for(let i=1 ; i < tableau.length ; i++){
        if(nombre < tableau[i]){
            nombre = tableau[i];
        }
    }
    document.write('Le nombre le plus grand du tableau est ' + nombre);
    return nombre;
}


function remplirTableau(){
    let tab=[];
    let mot="";
    while(mot != 'stop'){
        mot = prompt('Veuillez introduire le mot stop :');
        tab.push(Number(mot));
    };
    return tab;
}

function afficheTableau(tab){
    for(let i = 0; i < tab.length -1 ; i++){
        document.write(tab[i] + '<br>');
    }
}

function valeurExiste(tab){
    let present = false;
    let mot = prompt('Veuillez introduire une valeur : ')
    for(let i = 0 ; i < tab.length ; i++){
        if(mot == tab[i]){
            present = true;
            document.write('La valeur ' + mot + ' existe dans le tableau !');
        }
    }
}

let tableau = [];
tableau = remplirTableau(tableau);
afficheTableau(tableau);

trouverMax(tableau);

valeurExiste(tableau);