function deleteFavourite(event){
    event.preventDefault();
    const fav_destination=event.currentTarget.dataset.destination;
    fetch("removeFromFavourites/"+fav_destination).then(onResponseDel).then(onText);
}

function onResponseDel(response){
    return response.text();
}

function onText(text){
    console.log(text);
    updateFavourites();
}


function onResponse(response){
    return response.json();
}

function onJson(json){

    //Seleziono l'elemento <ul> dalla pagina dei preferiti
    const fav_list=document.querySelector("ul");


    //Svuoto la lista
    fav_list.innerHTML="";

    //Per ogni preferito presente nel database...
    for(let favourite of json){

        

        //Creo un elemento della lista <li> ed un elemento <em>
        const favourite_li=document.createElement("li");
        const favourite_em=document.createElement("em");

        //Il contenuto del testo dell' elemento <em> corrisponde alla destinazione preferita
        favourite_em.textContent=favourite.favourite_dest;

        //<em> è figlio di <li>, che è figlio di <li>
        favourite_li.appendChild(favourite_em)
        fav_list.appendChild(favourite_li);

        //Creo un link che permetta l' eliminazione del preferito
        const del_fav=document.createElement("a");
        del_fav.textContent="Rimuovi dai preferiti";


        //Esso non contiene alcun collegamento, il tutto è gestito tramite richieste asincrone
        del_fav.href="#";
        favourite_li.appendChild(del_fav);

        

       
        //Identifico <a> in base alla destinazione associata, che verrà eliminata
        del_fav.dataset.destination=favourite.favourite_dest;

        del_fav.addEventListener("click",deleteFavourite);
        
    }
}

function updateFavourites(){
    fetch("getUserFavourites").then(onResponse).then(onJson);
}

updateFavourites();
