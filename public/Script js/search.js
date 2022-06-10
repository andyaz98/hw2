function onResponse(response){
    return response.json();
}

function showFlights(flightsJson){
    SECTION_RESULTS.innerHTML="";

    if(flightsJson.length==0){

        
        const DIV_MSG=document.createElement("div");
        DIV_MSG.classList.add("no-results");
        DIV_MSG.textContent="Spiacenti, la ricerca non ha prodotto alcun risultato";
        SECTION_RESULTS.appendChild(DIV_MSG);
    }
    else if(!document.getElementById("direct").checked){

        const TABLE=document.createElement("table");
        const TABLE_ROW_HEADER=document.createElement("tr");
        const TABLE_HEADER_DEP=document.createElement("th");
        TABLE_HEADER_DEP.textContent="Partenza";
        const TABLE_HEADER_ARR=document.createElement("th");
        TABLE_HEADER_ARR.textContent="Arrivo";
        const TABLE_HEADER_COMP=document.createElement("th");
        TABLE_HEADER_COMP.textContent="Compagnia";
        const TABLE_HEADER_COD=document.createElement("th");
        TABLE_HEADER_COD.textContent="Codice";
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_DEP);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_ARR);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_COMP);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_COD);
        TABLE.appendChild(TABLE_ROW_HEADER);
        SECTION_RESULTS.appendChild(TABLE);

        for(let i=0;i<flightsJson.length;i++){
            console.log(flightsJson[i][0]);
            const TABLE_ROW=document.createElement("tr");
            const TABLE_ROW_DEP=document.createElement("td");
            TABLE_ROW_DEP.textContent=flightsJson[i][0];
            const TABLE_ROW_ARR=document.createElement("td");
            TABLE_ROW_ARR.textContent=flightsJson[i][1];
            const TABLE_ROW_COMP=document.createElement("td");
            TABLE_ROW_COMP.textContent=flightsJson[i][2];
            const TABLE_ROW_COD=document.createElement("td");
            TABLE_ROW_COD.textContent=flightsJson[i][3];
            TABLE_ROW.appendChild(TABLE_ROW_DEP);
            TABLE_ROW.appendChild(TABLE_ROW_ARR);
            TABLE_ROW.append(TABLE_ROW_COMP);
            TABLE_ROW.appendChild(TABLE_ROW_COD);
            TABLE.appendChild(TABLE_ROW);
        }
    }
    else{
        
        const TABLE=document.createElement("table");
        const TABLE_ROW_HEADER=document.createElement("tr");
        const TABLE_HEADER_DEP=document.createElement("th");
        TABLE_HEADER_DEP.textContent="Partenza";
        const TABLE_HEADER_STP=document.createElement("th");
        TABLE_HEADER_STP.textContent="Scalo";
        const TABLE_HEADER_ARR=document.createElement("th")
        TABLE_HEADER_ARR.textContent="Arrivo";
        const TABLE_HEADER_COMP=document.createElement("th");
        TABLE_HEADER_COMP.textContent="Compagnia";
        const TABLE_HEADER_COD=document.createElement("th");
        TABLE_HEADER_COD.textContent="Codice";
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_DEP);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_STP);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_ARR);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_COMP);
        TABLE_ROW_HEADER.appendChild(TABLE_HEADER_COD);
        TABLE.appendChild(TABLE_ROW_HEADER);
        SECTION_RESULTS.appendChild(TABLE);

        for(let i=0;i<flightsJson.length;i++){
            console.log(flightsJson[i][0]);
            const TABLE_ROW=document.createElement("tr");
            const TABLE_ROW_DEP=document.createElement("td");
            TABLE_ROW_DEP.textContent=flightsJson[i][0];
            const TABLE_ROW_STP=document.createElement("td");
            TABLE_ROW_STP.textContent=flightsJson[i][1];
            const TABLE_ROW_ARR=document.createElement("td");
            TABLE_ROW_ARR.textContent=flightsJson[i][2];
            const TABLE_ROW_COMP=document.createElement("td");
            TABLE_ROW_COMP.textContent=flightsJson[i][3];
            const TABLE_ROW_COD=document.createElement("td");
            TABLE_ROW_COD.textContent=flightsJson[i][4];
            TABLE_ROW.appendChild(TABLE_ROW_DEP);
            TABLE_ROW.appendChild(TABLE_ROW_STP);
            TABLE_ROW.appendChild(TABLE_ROW_ARR);
            TABLE_ROW.append(TABLE_ROW_COMP);
            TABLE_ROW.appendChild(TABLE_ROW_COD);
            TABLE.appendChild(TABLE_ROW);
        }
    }
}



function search(event){
    fetch("search/searchForFlights/"+FORM.departure.value+"/"+FORM.arrival.value+"/"+document.getElementById("direct").checked).then(onResponse).then(showFlights);
    console.log(FORM.departure.value);
    console.log(FORM.arrival.value);
    console.log(document.getElementById("direct").checked);
    event.preventDefault();

}

const FORM=document.forms["search_form"];
const SECTION_RESULTS=document.querySelector(".results");



FORM.addEventListener("submit",search);

