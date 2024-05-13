const carre = document.querySelector(".carre");
// carre.addEventListener("mousemove", (event) => {
//     event.target.clientX
//     event.target.clienty
// console.log(event.clientX, event.clientY);
// })
// const bouton = document.getElementById("bouton");
// carre.addEventListener("mouseenter",()=>{
//     nouvelleDiv.classList.add("nouvelleDiv");
//     document.body.appendChild(nouvelleDiv);

// })



bouton.addEventListener("click", () => {
  const nouvelleDiv = document.createElement("div");
  nouvelleDiv.classList.add("nouvelleDiv");
  document.body.appendChild(nouvelleDiv);
});

// nouvelleDiv.addEventListener("mousemove", (event) => {
//     nouvelleDiv.style.left = event.clientX + "px";
//     nouvelleDiv.style.top = event.clientY + "px";
const centreX = carre.offsetLeft + carre.offsetWidth / 2;
const centreY = carre.offsetTop + carre.offsetHeight / 2; 




carre.addEventListener("mousemove", (event) => {
//   console.log(event.clientX, event.clientY)

  console.log(event)
  const nouvelleDiv = document.querySelector(".nouvelleDiv");   
  nouvelleDiv.style.left = event.clientX + "px";
  nouvelleDiv.style.top = event.clientY + "px";
});


