function onResponse(response) {
    return response.json();
}

function onError(error){
    console.log(error);
}





const AMADEUS_API_TOKEN_REQUEST="https://test.api.amadeus.com/v1/security/oauth2/token";
const AMADEUS_API_SEARCH_ENDPOINT="https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=CTA&destinationLocationCode=";


const IMG_1 = document.querySelector("img[data-destination-number='1'");
const IMG_2 = document.querySelector("img[data-destination-number='2'");
const IMG_3 = document.querySelector("img[data-destination-number='3'");
const IMG_4 = document.querySelector("img[data-destination-number='4'");
const IMG_5 = document.querySelector("img[data-destination-number='5'");

const PARAGRAPH_1=document.querySelector(".flights[data-destination-number='1'");
const PARAGRAPH_2=document.querySelector(".flights[data-destination-number='2'");
const PARAGRAPH_3=document.querySelector(".flights[data-destination-number='3'");
const PARAGRAPH_4=document.querySelector(".flights[data-destination-number='4'");
const PARAGRAPH_5=document.querySelector(".flights[data-destination-number='5'");

const DESTINATION_1 = document.querySelector(".paragraph[data-destination-number='1'").dataset.destination;
const DESTINATION_2 = document.querySelector(".paragraph[data-destination-number='2'").dataset.destination;
const DESTINATION_3 = document.querySelector(".paragraph[data-destination-number='3'").dataset.destination;
const DESTINATION_4 = document.querySelector(".paragraph[data-destination-number='4'").dataset.destination;
const DESTINATION_5 = document.querySelector(".paragraph[data-destination-number='5'").dataset.destination;

const DESTINATION_1_LOCATION_CODE=document.querySelector(".paragraph[data-destination-number='1'").dataset.destinationLocationCode;
const DESTINATION_2_LOCATION_CODE=document.querySelector(".paragraph[data-destination-number='2'").dataset.destinationLocationCode;
const DESTINATION_3_LOCATION_CODE=document.querySelector(".paragraph[data-destination-number='3'").dataset.destinationLocationCode;
const DESTINATION_4_LOCATION_CODE=document.querySelector(".paragraph[data-destination-number='4'").dataset.destinationLocationCode;
const DESTINATION_5_LOCATION_CODE=document.querySelector(".paragraph[data-destination-number='5'").dataset.destinationLocationCode;


var DEPARTURE_DATE = new Date();
var dd = String(DEPARTURE_DATE.getDate()).padStart(2, '0');
//Imposto la data di partenza a due mesi dal mese odierno (gennaio è zero)
var mm = String(DEPARTURE_DATE.getMonth() + 3).padStart(2, '0');  
var yyyy = DEPARTURE_DATE.getFullYear();

//Per evitare formati non validi
if(mm==13){    
    mm="01";
    yyyy+=1;
}else if(mm==14){
    mm="02";
    yyyy+=1;
}

if(dd>28){
    dd="28";
}

DEPARTURE_DATE = yyyy + '-' + mm + '-' + dd;



