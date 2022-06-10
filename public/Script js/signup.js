

function refresh(){
    document.querySelector(".no_username").classList.remove("missing");
    document.querySelector(".no_username").classList.add("hidden");
    document.querySelector(".short_username").classList.remove("missing");
    document.querySelector(".short_username").classList.add("hidden");
    document.querySelector(".long_username").classList.remove("missing");
    document.querySelector(".long_username").classList.add("hidden");
    document.querySelector(".used_username").classList.remove("missing");
    document.querySelector(".used_username").classList.add("hidden");
    document.querySelector(".no_password").classList.remove("missing");
    document.querySelector(".no_password").classList.add("hidden");
    document.querySelector(".short_password").classList.remove("missing");
    document.querySelector(".short_password").classList.add("hidden");
    document.querySelector(".pwd_username").classList.remove("missing");
    document.querySelector(".pwd_username").classList.add("hidden");
    document.querySelector(".pwd_upper").classList.remove("missing");
    document.querySelector(".pwd_upper").classList.add("hidden");
    document.querySelector(".pwd_special").classList.remove("missing");
    document.querySelector(".pwd_special").classList.add("hidden");
}




function onResponse(response) {
    return response.json();
}

//Salvo in una lista gli usernames già presenti, per effettuare la validazione lato client
function getUsers(users) {
    for (let i = 0; i < users.length; i++) {
        existing_users[i] = users[i].username;
        console.log(existing_users[i]);
    }
}


function validate(event) {

    //Rimuovo gli eventuali messaggi di errore mostrati in precedenza
    refresh();

    const a = form.password.value;

    //Controllo che il campo username non sia vuoto
    if (form.username.value == "") {
        const err = document.querySelector(".no_username");
        err.classList.remove("hidden");
        err.classList.add("missing");
        console.log("Username mancante");
        event.preventDefault();
        //err.classList.remove("no_username");
        //err.classList.add("missing");
    }

    //Controllo che il campo username abbia minimo 4 caratteri
    if (form.username.value.length < 3) {
        const err = document.querySelector(".short_username");
        err.classList.remove("hidden");
        err.classList.add("missing");
        console.log("Username troppo corto!");
        event.preventDefault();

    }

    //Controllo che il campo username abbia al massimo 10 caratteri
    if (form.username.value.length >= 10) {
        event.preventDefault();
        const err = document.querySelector(".long_username");
        err.classList.remove("hidden");
        err.classList.add("missing");
        console.log("Username troppo lungo!");
        
    }

    //Controllo che l'username non sia già in uso
    let used_username=false;
    for (let existing_user of existing_users) {
        if (form.username.value == existing_user) {
            used_username=true;
            
            break;
        }
        
    }
    if(used_username){
        const err=document.querySelector(".used_username");
        err.classList.remove("hidden");
        err.classList.add("missing");
        console.log("Username già in uso!");
        event.preventDefault();
    }

    //Controllo che il campo password non sia vuoto
    if (a == "") {
        const err = document.querySelector(".no_password");
        console.log("Password mancante")
        event.preventDefault();
        err.classList.remove("hidden");
        err.classList.add("missing");
    }

    //Controllo che la password abbia una lunghezza minima di 8 caratteri
    if (a.length <= 8) {
        const err=document.querySelector(".short_password");
        console.log("Password troppo corta!");
        event.preventDefault();
        err.classList.remove("hidden");
        err.classList.add("missing");
    }

    //Controllo che la password sia diversa dall' username
    if (a == form.username.value) {
        const err=document.querySelector(".pwd_username");
        console.log("La password deve essere diversa dall'username!");
        event.preventDefault();
        err.classList.remove("hidden");
        err.classList.add("missing");
    }

    let error_special_chars = true;
    let error_upper_case = true;

    //Controllo la presenza di ALMENO una lettera maiuscola
    for (let i = 1; i <= a.length; i++) {
        if (a.substring(i - 1, i) == "!" || a.substring(i - 1, i) == "@" || a.substring(i - 1, i) == "$" || a.substring(i - 1, i) == "%" || a.substring(i - 1, i) == "^" || a.substring(i - 1, i) == "&" || a.substring(i - 1, i) == "*" || a.substring(i - 1, i) == "(" || a.substring(i - 1, i) == ")" || a.substring(i - 1, i) == "_" || a.substring(i - 1, i) == "+" || a.substring(i - 1, i) == "=" || a.substring(i - 1, i) == "-" || a.substring(i - 1, i) == "{" || a.substring(i - 1, i) == "}" || a.substring(i - 1, i) == "[" || a.substring(i - 1, i) == "]" || a.substring(i - 1, i) == ":" || a.substring(i - 1, i) == ";" || a.substring(i - 1, i) == "'" || a.substring(i - 1, i) == "|" || a.substring(i - 1, i) == '"' || a.substring(i - 1, i) == "<" || a.substring(i - 1, i) == ">" || a.substring(i - 1, i) == "," || a.substring(i - 1, i) == "." || a.substring(i - 1, i) == "?" || a.substring(i - 1, i) == "/" || a.substring(i - 1, i) == "`" || a.substring(i - 1, i) == "~" || a.substring(i - 1, i) == "0" || a.substring(i - 1, i) == "1" || a.substring(i - 1, i) == "2" || a.substring(i - 1, i) == "3" || a.substring(i - 1, i) == "4" || a.substring(i - 1, i) == "5" || a.substring(i - 1, i) == "6" || a.substring(i - 1, i) == "7" || a.substring(i - 1, i) == "8" || a.substring(i - 1, i) == "9") {
            //Se viene trovato un carattere speciale o un numero, si passa direttamente all'iterazione successiva, altrimenti esso verrebbe
            //interpretato uguale al suo corrispondente carattere maiuscolo nel blocco if sottostante, il che non andrebbe bene
            continue;
        }
        //Controlla solo le lettere, salta i caratteri speciali ed i numeri
        if (a.substring(i - 1, i) == a.substring(i - 1, i).toUpperCase()) {
            error_upper_case = false;
            break;
        }
    }

    //Controllo la presenza di almeno un carattere speciale
    for (let i = 1; i <= a.length; i++) {
        if (a.substring(i - 1, i) == "!" || a.substring(i - 1, i) == "@" || a.substring(i - 1, i) == "$" || a.substring(i - 1, i) == "%" || a.substring(i - 1, i) == "^" || a.substring(i - 1, i) == "&" || a.substring(i - 1, i) == "*" || a.substring(i - 1, i) == "(" || a.substring(i - 1, i) == ")" || a.substring(i - 1, i) == "_" || a.substring(i - 1, i) == "+" || a.substring(i - 1, i) == "=" || a.substring(i - 1, i) == "-" || a.substring(i - 1, i) == "{" || a.substring(i - 1, i) == "}" || a.substring(i - 1, i) == "[" || a.substring(i - 1, i) == "]" || a.substring(i - 1, i) == ":" || a.substring(i - 1, i) == ";" || a.substring(i - 1, i) == "'" || a.substring(i - 1, i) == "|" || a.substring(i - 1, i) == '"' || a.substring(i - 1, i) == "<" || a.substring(i - 1, i) == ">" || a.substring(i - 1, i) == "," || a.substring(i - 1, i) == "." || a.substring(i - 1, i) == "?" || a.substring(i - 1, i) == "/" || a.substring(i - 1, i) == "`" || a.substring(i - 1, i) == "~") {
            error_special_chars = false;
            break;
        }
    }


    //Controllo errori sulla presenza di lettere maiuscole o caratteri speciali
    if (error_upper_case) {
        const err=document.querySelector(".pwd_upper");
        console.log("La password deve contenere almeno un carattere maiuscolo!");
        event.preventDefault();
        err.classList.remove("hidden");
        err.classList.add("missing");
    }
    if (error_special_chars) {
        const err=document.querySelector(".pwd_special");
        console.log("La password deve contenere almeno un carattere speciale!");
        event.preventDefault();
        err.classList.remove("hidden");
        err.classList.add("missing");
    }
}





let existing_users = [];

const special_chars = "!@$%^&*()_+=-{}[]:;'\|`~<>,.?/#";

const form = document.forms["login_form"];

form.addEventListener("submit", validate);

//Richiedo al server gli username già in uso
fetch("getUsers").then(onResponse).then(getUsers);





