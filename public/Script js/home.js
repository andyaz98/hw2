function updateHomePage(homeContentsJson){
    //Itero gli elementi della home e gli aggiungo il contenuto ricevuto dal server, vedere file home_content.php
    for(let i=0; i<CONTENTS_COUNT; i++){

        homeParagraphs[i].textContent=homeContentsJson[i].textContent;
        homeTitles[i].textContent=homeContentsJson[i].title;
        homeParagraphsNumbers[i].textContent=homeContentsJson[i].contentId;
    }
}


//Ricavo il numero di paragrafi da riempire nella home-page
const CONTENTS_COUNT=document.querySelectorAll("section .paragraph").length;


let homeTitles=[];
let homeParagraphs=[];
let homeParagraphsNumbers=[];

//Seleziono i riferimenti agli elementi em figli di elementi con classe title e li salvo in un array
//Seleziono i riferimenti agli elementi span figli di elementi classe title e li salvo in un array
//Seleziono i riferimenti agli elementi di classe paragraph-content e li salvo in un array
for (let i=1; i<=CONTENTS_COUNT; i++){
    homeParagraphsNumbers[i-1]=document.querySelector("section [data-destination-number='"+i+"'] .title em");
    homeTitles[i-1]=document.querySelector("section [data-destination-number='"+i+"'] .title span");
    homeParagraphs[i-1]=document.querySelector("section [data-destination-number='"+i+"'] .paragraph-content");
    //L' elemento dell'array di indice [0], corrisponderà all' elemento con id 1
}

//Richiedo il contenuto della home al server
fetch("getHomeContent").then(onResponse).then(updateHomePage);



