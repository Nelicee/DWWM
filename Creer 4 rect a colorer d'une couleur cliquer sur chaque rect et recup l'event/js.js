const rectangle1 = document.querySelector(".rectangle1");
const rectangle2 = document.querySelector(".rectangle2");
const rectangle3 = document.querySelector(".rectangle3");
const rectangle4 = document.querySelector(".rectangle4");

// rectangles.forEach((rect) => {
//     rect.addEventListener("click"), function(event) {
//         console.log(event);
//     });
// }); 

rectangle1.addEventListener("click", function(event) {
    console.log(event);
})

rectangle2.addEventListener("click", function(event) {
    console.log(event);
})

rectangle3.addEventListener("click", function(event) {
    console.log(event);
})
rectangle4.addEventListener("click", function(event) {
    console.log(event);
})

const rect1 = document.getElementById("rect1");
const rect2 = document.getElementById("rect2");
const rect3 = document.getElementById("rect3");
const rect4 = document.getElementById("rect4");

// rectangles.forEach((rect) => {
//     rect.addEventListener("click"), function(event) {
//         console.log(event);
//     });
// }); 

rect1.addEventListener("click", function(event) {
    // const elem =event.target.id;
    // const elemdiv=document.getElementById(elem);
    // elemdiv.style.backgroundColor = "yellow";
    console.log(event.target);
event.target.style.backgroundColor ="yellow";
})

rect2.addEventListener("click", function(event) {
     const elem =event.target.id;
     const elemdiv=document.getElementById(elem);
     elemdiv.style.backgroundColor = "yellow";
})

rect3.addEventListener("click", function(event) {
    const elem =event.target.id;
    const elemdiv=document.getElementById(elem);
    elemdiv.style.backgroundColor = "yellow";   
})
rect4.addEventListener("click", function(event) {
    const elem =event.target.id;
    const elemdiv=document.getElementById(elem);
    elemdiv.style.backgroundColor = "yellow";
})

const rectangles = document.querySelectorAll(".rect");
rectangles.forEach(element => {
    element.addEventListener("click", (event) =>{  
        rectangles.forEach(element2=>{
            element2.style.backgroundColor = "red";
        })
        event.target.style.backgroundColor = "yellow"
 })
});