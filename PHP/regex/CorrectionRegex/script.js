function verifPassword(){
let password = document.getElementById("passwordSaisie").value;
let regexMajuscule = /[A-Z]/;
let regexMinuscule = /[a-z]/;
let regexNombre = /[0-9]/;
let regexSpecialChar = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/;


let longueurMDP = document.getElementById("longueurMDP");
let majusculeMDP = document.getElementById("majuscule");
let minusculeMDP = document.getElementById("minuscule");
let nombreMDP = document.getElementById("nombre");
let specialCharMDP = document.getElementById("specialChar");


longueurMDP.className = password.lenght >=8 ? "valid" : "invalid";
majusculeMDP.className = regexMajuscule.test(password) ? "valid" : "invalid";
minusculeMDP.className = regexMinuscule.test(password) ? "valid" : "invalid";
nombreMDP.className = regexNombre.test(password) ? "valid" : "invalid";
specialCharMDP. className = regexSpecialChar.test(password) ? "valid" : "invalid";
}

