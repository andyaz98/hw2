function addToFavourites(event) {
    event.preventDefault();
    event.currentTarget.removeEventListener("click",addToFavourites);
    const fav_destination = event.currentTarget.dataset.destination;
    fetch("home/account/addToFavourites/" + fav_destination).then(onResponseFav).then(onText);
}

function removeFromFavourites(event){
    event.preventDefault();
    event.currentTarget.removeEventListener("click",removeFromFavourites);
    event.currentTarget.textContent="Aggiungi ai preferiti";
    event.currentTarget.classList.remove("user_fav");
    event.currentTarget.classList.add("add_to_fav");
    const fav_destination = event.currentTarget.dataset.destination;
    fetch("home/account/removeFromFavourites/"+ fav_destination).then(onResponseFav).then(onText);
}

function showLogin(event) {
    event.preventDefault();
    event.currentTarget.textContent = "Effettua il login";
    event.currentTarget.classList.remove("no_login");
    event.currentTarget.removeEventListener("click", showLogin);
}

function onResponseFav(response) {
    return response.text();
}

function onText(text) {
    console.log(text);
    //Ogni volta che viene aggiunto o rimosso un preferito, il testo del link cambierà di conseguenza
    updateFavouritesHome();
}

function onResponseUpdate(response) {
    return response.json();
}

function onJson(json) {
    
    const destinations = document.querySelectorAll(".add_to_fav");
    
    for (let favourite of json) {
        for (let destination of destinations) {
            //console.log(favourite.favourites + "==" + destination.dataset.destination)
            if (favourite.favourite_dest == destination.dataset.destination) {
                destination.classList.remove("add_to_fav");
                destination.classList.add("user_fav");
                destination.textContent = "Rimuovi dai preferiti";
                destination.removeEventListener("click",addToFavourites);
            }
        }
    }

    selectAddToFav();

    selectUserFav();
}

function updateFavouritesHome() {
    fetch("home/account/getUserFavourites").then(onResponseUpdate).then(onJson);
}

function selectAddToFav() {
    //Gli elementi di classe add_to_fav sono tutti quelli che l'utente (loggato) può aggiungere ai preferiti
    //Vedere funzione addToFavourites
    const destinations = document.querySelectorAll(".add_to_fav");

    //Aggiungo un listener a tutti gli elementi di classe add_to_fav, in modo tale che al click, essi vengano aggiunti ai preferiti
    for (let destination of destinations) {
        destination.addEventListener("click", addToFavourites);
    }
}

function selectNoLogin() {
    //Se l'utente non ha fatto il login, allora i link avranno un comportamento diverso: reindirizzano l'utente alla login (classe no_login)
    //Vedere funzione showLogin
    const hidden_elements = document.querySelectorAll(".fav .no_login");
    for (let hidden_a of hidden_elements) {
        hidden_a.addEventListener("click", showLogin);
    }

}

function selectUserFav() {
    const destinations_fav = document.querySelectorAll(".fav .user_fav");

    for (let user_favourite of destinations_fav) {
        //console.log(user_favourite);
        user_favourite.addEventListener("click", removeFromFavourites);
    }
}


//Aggiorno i link di aggiunta ai preferiti, se un elemento è già nei preferiti dell' utente, allora esso deve avere la
//Possibilita di rimuoverlo dai preferiti anche dalla home-page, vedere funzione onJson
updateFavouritesHome();

selectAddToFav();

selectUserFav();

//Se l'utente ha fatto il login, questa funzione non troverà elementi di classe no_login, in caso contrario, 
//essa sarà l'unica a trovare gli elementi di tale classe, perchè verranno stampati dal codice php della home page
selectNoLogin();






















