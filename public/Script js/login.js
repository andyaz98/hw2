function validate(event){

    if(form.username.value==""){
        console.log("Username mancante");
        event.preventDefault();
        err_usr.classList.remove("hidden");
        err_usr.classList.add("missing");
    }
    if(form.password.value==""){
        console.log("Password mancante")
        event.preventDefault();
        err_pwd.classList.remove("hidden");
        err_pwd.classList.add("missing");
    }
}





const err_usr=document.querySelector(".no_username");
const err_pwd=document.querySelector(".no_password");

err_usr.classList.remove("missing");
err_usr.classList.add("hidden");

err_pwd.classList.remove("missing");
err_pwd.classList.add("hidden");




const form=document.forms["login_form"];

console.log(form.username.value);
console.log(form.password.value);
//console.log(form);

form.addEventListener("submit",validate);





