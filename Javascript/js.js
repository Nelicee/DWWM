let nombre1 = 5
let nombre2 = 3

const resultatAddition = nombre1 + nombre2
console.log("Résultat de l'addition: ", resultatAddition)

let nombre3 = 10
let nombre4 = 7

const resultatSoustraction = nombre3 - nombre4
console.log("Résultat de la soustraction: ", resultatSoustraction)

let nombre5 = 4
let nombre6 = 6
const resultatMultiplication = nombre5 * nombre6
console.log("resultatMultiplication: ", resultatMultiplication)

const prenom = "John"
const nom = "Doe"

const nomComplet = prenom + " " +  nom
console.log(nomComplet)

let sujet = "Le chat"
let verbe = "mange"
let objet = "la souris"
const phrase = sujet + " " + verbe +" " + objet
console.log("Phrase: ", phrase)

const tableau = [1,2,3,4,5]
tableau.forEach (element => {
    console.log(element)
});

console.log(tableau)

const tableauvide =[]
tableauvide.push(10,20,50)
console.log(tableauvide)
tableauvide.shift()
console.log(tableauvide)


const personne ={
    nom: `Alice`,
    age: 25,
    ville: `Paris`
};
console.log(personne);

const compteBancaire = {
    solde: 1000,
    titulaire: `John Doe`
};

const nouveauMontant= 500;

compteBancaire.solde += nouveauMontant;
console.log(compteBancaire)

// saluer = function(chaineSalutations,prenom1){
//     const prenom1 = "Alice";
//     const chaineSalutations = "Bonjour,";
//     console.log(saluer());
// }

// saluer(chaineSalutations, prenom1)

function saluer(prenom1, nom1) {

console.log("Bonjour " +prenom1 +" " +  nom1 + " !");
}
saluer("Thomas", "Brandt")

function multiplication (nombre1, nombre2){
console.log(nombre1*nombre2)
}

multiplication(7,8);

//Exercice 1 :

//Créez une fonction qui prend en entrée l'âge d'une personne et affiche "Majeur" si l'âge est supérieur ou égal à 18, sinon affichez "Mineur".

let age = 48;

if (age >= 18){
    console.log("Majeur");
}else {
console.log("Mineur");
}

function determinerAge(age){
    if (age >= 18){
        console.log("La personne est majeure")
    }
    else{
        console.log("la personne est mineure");
    }
}
determinerAge(10)








//### Exercice 2 :
//Affichez les nombres pairs de 1 à 20 en utilisant une boucle for.

for (let i = 2; i < 20; i += 2) {
    console.log(i);
    
}

for (let i = 1; i <= 20; i++) {
    if (i % 2 === 0){
        console.log(i);
    }
    
}
//### Exercice 3 :

//Demandez à l'utilisateur de deviner un nombre entre 1 et 100. Utilisez une boucle while pour permettre à l'utilisateur de saisir des nombres jusqu'à ce qu'il devine correctement.


// let nombre = prompt("Donnez un chiffre entre 1 et 100");

// while( nombre !== "45" ){
    
//     nombre = prompt("Merci de faire une nouvelle proposition")
// }
// console.log("Bravo! Vous avez trouvé le bon nombre");

// correction:
// const randomNumber = Math.floor((Math.random() * 100) + 1)

// let inputUser = prompt("Veuillez entrer une valeur entre 1 et 100")

// while (isNaN(inputUser)){
//     inputUser = prompt("Veuillez entrer un nombre entre 1 et 100")
// }  

// while (inputUser != randomNumber){
//     if (inputUser > randomNumber){
//         inputUser = prompt("Le nombre est trop haut")
//     }
    
//     if (inputUser < randomNumber){
//         inputUser = prompt("le nombre est trop bas")
//     }

//     if (inputUser == randomNumber){
//         console.log("c'est gagné");
//     }

// }

//## Exercice 4 :

//Écrivez une fonction qui prend en entrée un mois (1 pour janvier, 2 pour février, etc.) et retourne le nombre de jours dans ce mois. Assurez-vous de gérer correctement le cas de février pour les années bissextiles (29 jours) et non bissextiles (28 jours).

// moisEtnombre function(mois, nombreDeJours) {}
function nombreDeJours(num){
    let nombreDeJours;

switch (num) {
    case 1:
        nombreDeJours = 31;
        break;
    case 2:
        const dateActuelle = new Date();
        const annee = dateActuelle.getFullYear();
        if (annee % 4 === 0) {
            nombreDeJours =29}
            else{ nombreDeJours =28
        }
        break;
    case 3:
        nombreDeJours = 31;
        break;
    case 4:
        nombreDeJours = 30;
        break;
    case 5:
        nombreDeJours = 31;
        break;
    case 6:
        nombreDeJours = 30;
        break;
    case 7:
        nombreDeJours = 31;
        break;
    case 8:
        nombreDeJours = 31;
        break;
    case 9:
        nombreDeJours = 30;
        break;
    case 10:
        nombreDeJours = 31;
        break;
    case 11:
        nombreDeJours = 30;
        break;
    case 12:
        nombreDeJours = 31;
        break;
    default:
        nombreDeJours = "mois invalide";
}

console.log("nombre de jours : " + nombreDeJours);
}

nombreDeJours(2);

// Exercices - Manipulation du DOM
// ### Exercice 1 : Modification du contenu d'un élément

// Ajoutez un bouton à votre page HTML et un paragraphe vide. Lorsque vous cliquez sur le bouton, le texte "Hello, world!" doit être ajouté au paragraphe.
let button = document.getElementsByTagName("button");
console.log(button);
button[0].addEventListener("click", function() {
let p = document.getElementsByTagName("p");
p[0].textContent = "Hello World";
});

// ### Exercice 2 : Modification de style

// Ajoutez un bouton à votre page HTML et un paragraphe avec du texte. Lorsque vous cliquez sur le bouton, changez la couleur du texte du paragraphe en rouge.  
let bouton2 = document.getElementById("button2");
bouton2.addEventListener("click", function() {
let parag2 = document.getElementById("parag2");
parag2.style.color = "red";
})

// ### Exercice 3 : Création d'éléments

// Ajoutez un bouton à votre page HTML. Lorsque vous cliquez sur ce bouton, un nouvel élément de type `<li>` doit être créé et ajouté à une liste `<ul>` existante sur la page avec le texte "Nouvel élément".
// let bouton3 = document.getElementById("button3");
// bouton3.addEventListener("click", function() {


// })

let btn3 = document.getElementById("btn3");
let ul = document.getElementById("ul1");
btn3.addEventListener("click", function() {
    let newli = document.createElement("li");
    newli.textContent = 'Nouvel élément';
    ul.appendChild(newli)
    console.log("Text ajouter");
});

// ### Exercice 4 : Suppression d'éléments

// Ajoutez plusieurs éléments de type `<li>` à une liste `<ul>` sur votre page HTML. Ajoutez un bouton à la page. Lorsque vous cliquez sur ce bouton, le premier élément de la liste doit être supprimé.

let supprimerLePremierElement = document.getElementById("btn4");
const maListe = document.getElementById('maListe');
supprimerLePremierElement.addEventListener("click", function() {
    // if (maListe.children.length > 0) {
        maListe.removeChild(maListe.children[0]);
    //   } 
})

// ### Exercice 5 : Gestion d'événements multiples

//     Ajoutez trois boutons à votre page HTML, chacun ayant un identifiant unique. Créez une seule fonction de gestionnaire d'événements JavaScript. Lorsque vous cliquez sur l'un des boutons, un message s'affiche dans la console indiquant l'identifiant du bouton sur lequel vous avez cliqué.        

    // const boutons =["#BoutonRose", "#BoutonVert", "#BoutonBleu"]
    // boutons.forEach(element).addEventListener("click", function() {
    //     boutons.forEach(boutons);  console.log(boutons.id)
    // })

    // function select({
        
    // })

// correction de Sarah
// let button = document.querySelectorAll("#bouton1, #bouton2, #bouton3")
//   console.log(button)
//   button.forEach((button) => {
//     button.addEventListener("click", (event) => {
//     console.log(event.target.id)
//     })
//   })




