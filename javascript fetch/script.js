let pages
fetch("https://rickandmortyapi.com/api/character?page=1")
.then(response => response.json())
.then(data => {
    pages = data.info.pages
})

setTimeout(() => {
    for (let index = 1; index <= pages; index++) {
        fetch('https://rickandmortyapi.com/api/character?page=' + index)
        .then(response => response.json())
        .then(data => {
            data.results.forEach(element => {
                console.log(element.name, element.image);
            });
        })
        
    }
}, 2000)
