fetch('https://pokeapi.co/api/v2/growth-rate/1/')
.then(response => response.json())
.then(data => {
    console.log(data);
})