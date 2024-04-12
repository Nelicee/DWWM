const startButton = document.querySelector(".startButton")
const startScreen = document.querySelector(".startScreen")
const selectCharacters = document.querySelector(".selectCharacters")
startButton.addEventListener("click", () => {
   startScreen.style.display = "none"
   selectCharacters.style.display ="flex"
})

const tutorialButton = document.querySelector(".tutorialButton")
// const modalBlackScreen = document.querySelector(".modalBlackScreen")
let modal = document.getElementById('myModal');
// const modal =document.querySelector(".modal")
tutorialButton.addEventListener("click", () => {
   // modalBlackScreen.style.display = "flex"
   modal.style.display = "flex"
   
})
function openModal() {
  document.getElementById('myModal').style.display = 'block';
}
// Fonction pour fermer le modal
function closeModal() {
  document.getElementById('myModal').style.display = 'none';
}
// Fermer le modal lorsque l'utilisateur clique en dehors du contenu
window.onload = function(event) {
  let modal = document.getElementById('myModal');
  if (event.target == modal) {
    modal.style.display = "block";
  }
}
let player1;
let player2;
let player1Name;
let player2Name;



const imgChevalierP1 = document.querySelector(".player1Chevalier")
const imgMageP1 = document.querySelector(".player1Mage")
const imgArcherP1 = document.querySelector(".player1Archer")
const imgPretreP1 = document.querySelector(".player1Pretre")
imgChevalierP1.addEventListener('click',() => {
   imgChevalierP1.style.border = "2px solid red";
   imgMageP1.style.border = "none";
   imgArcherP1.style.border = "none";
   imgPretreP1.style.border = "none";
   player1 = Object.assign({}, tab[0])
})
imgMageP1.addEventListener('click',() => {
    imgChevalierP1.style.border = "none";
    imgMageP1.style.border = "2px solid red"
    imgArcherP1.style.border = "none";
    imgPretreP1.style.border = "none";
    player1 = Object.assign({}, tab[1])
 })
 imgArcherP1.addEventListener('click',() => {
    imgChevalierP1.style.border = "none";
    imgMageP1.style.border = "none"
    imgArcherP1.style.border = "2px solid red"
    imgPretreP1.style.border = "none";
    player1 = Object.assign({}, tab[2])
 })
 imgPretreP1.addEventListener('click',() => {
    imgChevalierP1.style.border = "none"
    imgMageP1.style.border = "none"
    imgArcherP1.style.border = "none"
    imgPretreP1.style.border = "2px solid red"
    player1 = Object.assign({}, tab[3])
 })

 const imgChevalierP2 = document.querySelector(".player2Chevalier")
 const imgMageP2 = document.querySelector(".player2Mage")
 const imgArcherP2 = document.querySelector(".player2Archer")
 const imgPretreP2 = document.querySelector(".player2Pretre")
 imgChevalierP2.addEventListener('click',() => {
    imgChevalierP2.style.border = "2px solid red";
    imgMageP2.style.border = "none";
    imgArcherP2.style.border = "none";
    imgPretreP2.style.border = "none";
    player2 = Object.assign({}, tab[0])
 })
 imgMageP2.addEventListener('click',() => {
     imgChevalierP2.style.border = "none";
     imgMageP2.style.border = "2px solid red"
     imgArcherP2.style.border = "none";
     imgPretreP2.style.border = "none";
     player2 = Object.assign({}, tab[1])
  })
  imgArcherP2.addEventListener('click',() => {
     imgChevalierP2.style.border = "none";
     imgMageP2.style.border = "none"
     imgArcherP2.style.border = "2px solid red"
     imgPretreP2.style.border = "none";
     player2 = Object.assign({}, tab[2])
  })
  imgPretreP2.addEventListener('click',() => {
     imgChevalierP2.style.border = "none"
     imgMageP2.style.border = "none"
     imgArcherP2.style.border = "none"
     imgPretreP2.style.border = "2px solid red"
     player2 = Object.assign({}, tab[3])
  })


 const gameScreen = document.querySelector(".gameScreen")
 const startTheGameButton= document.querySelector(".startTheGameButton")
startTheGameButton.addEventListener("click", (event)=> {
console.log(player1, player2);
if (player1 == undefined) {
   return
}
if (player2 == undefined) {
   retun
}
selectCharacters.style.display ="none"
gameScreen.style.display= "flex"

const inputPlayer1 = document.getElementById("pseudo1");
const inputPlayer2 = document.getElementById("pseudo2");
console.log(inputPlayer1.value);
const battlePlayer1 = document.querySelector(".player1Name");
const battlePlayer2 = document.querySelector(".player2Name");
battlePlayer1.textContent = inputPlayer1.value;
battlePlayer2.textContent = inputPlayer2.value;
const namePersonnage1 = document.querySelector('.namePersonnage1');
const namePersonnage2 = document.querySelector('.namePersonnage2');
namePersonnage1.textContent = player1.nomClass;
namePersonnage2.textContent = player2.nomClass;
const imgPerso1 = document.querySelector('.imgPerso1')
imgPerso1.src = player1.img
const imgPerso2 = document.querySelector('.imgPerso2')
imgPerso2.src = player2.img
const PVPlayer1 = document.querySelector(".PVPlayer1")
const PVPlayer2 = document.querySelector(".PVPlayer2")
PVPlayer1.textContent = "Points de vie: " + player1.pv;
PVPlayer2.textContent = "Points de vie: " + player2.pv;
const PATKPlayer1 = document.querySelector(".PATKPlayer1")
const PATKPlayer2 = document.querySelector(".PATKPlayer2")
PATKPlayer1.textContent = "Points d'attaque: " + player1.atk;
PATKPlayer2.textContent = "Points d'attaque: " + player2.atk;

})
const PVPlayer1 = document.querySelector(".PVPlayer1")
const PVPlayer2 = document.querySelector(".PVPlayer2")
const ATKButtonPlayer1 = document.querySelector(".ATKButtonPlayer1")
const ATKButtonPlayer2 = document.querySelector(".ATKButtonPlayer2")
ATKButtonPlayer1.addEventListener("click", () => {
   const inputPlayer1 = document.getElementById("pseudo1");
if (player2.pv <= 0) {
   return
} else {
   player2.pv = player2.pv - player1.atk;
   PVPlayer2.textContent = "Points de vie: " + player2.pv;
   ATKButtonPlayer1.disabled = true;
   ATKButtonPlayer2.disabled = false;
   if (player2.pv <= 0) {
      PVPlayer2.textContent = "Points de vie: 0";
      ATKButtonPlayer2.disabled = true;
      ATKButtonPlayer1.disabled = true;
      console.log(inputPlayer1.value + " a gagné");
      let fincbt = document.querySelector(".End")
      gameScreen.style.display = "none"
      fincbt.style.display = "flex"
   
   
// const inputPlayer1Name = document.querySelector(".player1Name");
// const inputPlayer2Name = document.querySelector(".player2Name");

// winnerBattlePlayer1 = inputPlayer1Name.value;
// winnerBattlePlayer2= inputPlayer2Name.value;
// console.log(`Le ${inputPlayer1Name.value} a gagné`)

}

}
})



ATKButtonPlayer2.addEventListener("click", () => {
   if (player1.pv <= 0) {
      return
   } else {
      player1.pv = player1.pv - player2.atk;
   PVPlayer1.textContent = "Points de vie: " + player1.pv;
   ATKButtonPlayer2.disabled = true;
   ATKButtonPlayer1.disabled = false
   }
   })



// //  const gameScreen = document.querySelector(".gameScreen")
//  startTheGameButton.addEventListener("click",() => {
//     selectCharacters.style.display ="none"
//     gameScreen.style.display= "block"
//  })
const sectionBattle = document.querySelector(".gameScreen")


let tab = [
   {
       nomClass : "Chevalier",
       pv : 10,
       atk : 5,
       img : "./images/personnage1.jpg" 
   },
   {
       nomClass : "Mage",
       pv : 20,
       atk : 3,
       img : "./images/mage.jpg"
   },
   {
       nomClass : "Archer",
       pv : 8,
       atk : 8,
       img : "images/Archer.jpg"
   },
   {
       nomClass : "Pretre",
       pv : 30,
       atk : 1,
       img : "images/Prêtre.jpg"
   }
];

let currentPlayer = player1; // On commence par le joueur 1

// ATKButtonPlayer1.addEventListener("click", () => {
//     if (currentPlayer === player1) {
//         if (player2.pv > 0) {
//             player2.pv -= player1.atk;
//             PVPlayer2.textContent = "Points de vie: " + player2.pv;
//             currentPlayer = player2; // Passer au joueur 2
//         }
//     }
// });

ATKButtonPlayer2.addEventListener("click", () => {
    if (currentPlayer === player2) {
        if (player1.pv > 0) {
            player1.pv -= player2.atk;
            PVPlayer1.textContent = "Points de vie: " + player1.pv;
            currentPlayer = player1; // Passer au joueur 1
        }
    }
});

// // Fonction pour ouvrir le modal
// function openEnd() {
//    document.getElementById('myEnd').style.display = 'block';
//  }
//  // Fonction pour fermer le modal
//  function closeModal() {
//    document.getElementById('myEnd').style.display = 'none';
//  }
//  // Fermer le modal lorsque l'utilisateur clique en dehors du contenu
//  window.onload = function(event) {
//    var End = document.getElementById('myEnd');
//    if (event.target == End) {
//      End.style.display = "none";
//    }
//  }

 // Fonction pour ouvrir le modal

 