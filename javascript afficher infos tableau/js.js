// Enoncé exercice
// Affichez dans un h1, le type et nom (concaténation)
// Affichez le prix dans un paragraphe
// Affichez tous les types de nappages possibles dans un paragraphe
// Faites en une card
// Créer un formulaire avec :
// Tous les napages possible à l'aide d'un input de type radio
// Tous les toppings possible à l'aide d'un autre input de type radio
// Un bouton
// Un écouteur d'événement sur le bouton qui permettra d'afficher dans un h2 le type de nappage et le type de topping

let data = {
  id: "0001",
  type: "gateau",
  nom: "donuts",
  price: 0.55,
  nappages: {
    nappage: [
      { id: "1001", type: "Chocolat" },
      { id: "1002", type: "Fraise" },
      { id: "1003", type: "Framboise" },
      { id: "1004", type: "Vanille" },
    ],
  },
  topping: [
    { id: "5001", type: "Sans Topping" },
    { id: "5002", type: "Perles de sucre" },
    { id: "5003", type: "Copos de coco" },
    { id: "5004", type: "Billes de chocolat" },
    { id: "5005", type: "Vermisselles de chocolat" },
  ],
};
const body = document.querySelector("body");
const card = document.createElement("div");
document.body.appendChild(card);
card.style.width = "18rem";
card.style.height = "23rem";
card.style.backgroundColor = "blue";
card.style.color = "white";
card.style.display = "flex";
card.style.flexDirection = "column";
card.style.justifyContent = "center";
card.style.alignItems = "center";
card.style.borderRadius = "10px";
card.style.margin = "10px";
card.style.padding = "10px";
card.style.boxShadow = "0 0 10px black";
card.style.fontSize = "20px";
card.style.fontWeight = "bold";
card.style.fontFamily = "Arial";
card.style.textAlign = "center";

const title = document.createElement("h1");
title.style.color = "white";
title.textContent = data.type + " " + data.nom;
card.appendChild(title);

const price = document.createElement("p")
price.textContent = "Prix: " + data.price + "€"
card.appendChild(price);


const nappagesParagraphe = document.createElement('p');
card.appendChild(nappagesParagraphe);

let typesNappages = "";

data.nappages.nappage.forEach(nappage => {
  typesNappages += nappage.type + ", ";
});

typesNappages = typesNappages.slice(0, -2);
nappagesParagraphe.style.display = "flex";
nappagesParagraphe.style.flexDirection = "column"; 
nappagesParagraphe.style.justifyContent = "center";
nappagesParagraphe.textContent = "Nappages possibles : " + typesNappages;

// Création du formulaire
const form = document.createElement("form");
form.style.backgroundColor = "blue";
form.style.width = "30rem";
form.style.height = "30rem";
form.style.color = "white";
body.appendChild(form);


// Ajout des options de nappage
const nappageFieldset = createFieldset("Nappages", "nappage");
data.nappages.forEach(option => {
  addOptionToFieldset(nappageFieldset, option);
});
form.appendChild(nappageFieldset);
