// ** exercice 16.04 matin**
// Créer une page avec un bouton (html)
// En cliquant sur le bouton, j'ai besoin de voir apparaitre un rectangle rouge (js) et également un autre rectangle bleu qui n'apparaitra qu'au bout de 5 seconde
// Il va falloir utiliser setTimeout()

const btn = document.querySelector(".btn");

btn.addEventListener("click", () => {
  const rectangle1 = document.createElement("div");
  // rectangle1.classList.add("rectangle1");
  rectangle1.style.backgroundColor = "red";
  rectangle1.style.width = "100px";
  rectangle1.style.height = "100px";
  document.body.appendChild(rectangle1);

  rectangle1.addEventListener("click", () => {
    supprimerRectangle(rectangle1);
  });

  setTimeout(() => {
    const rectangle2 = document.createElement("div");
    // rectangle2.classList.add("rectangle2");
    rectangle2.style.backgroundColor = "blue";
    rectangle2.style.width = "100px";
    rectangle2.style.height = "100px";
    document.body.appendChild(rectangle2);
    rectangle2.addEventListener(
      "click",
      () => {
        supprimerRectangle(rectangle2);
      }
  
    );
  },3000);
});

// Exercice bonus :

// Créer une fonction générique qui permettra la suppression d'un rectangle au clic.
// Utiliser cette fonction pour supprimer les rectangles créés via le bouton
function supprimerRectangle(rectangle) {
  rectangle.remove();
}

