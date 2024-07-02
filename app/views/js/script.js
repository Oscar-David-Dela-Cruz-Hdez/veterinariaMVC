let signUp = document.getElementById("signUp");
let signIn = document.getElementById("signIn");
let nameInput = document.getElementById("nameInput");
let dato = document.getElementById("dato");

signIn.onclick = function(event) {
    event.preventDefault();
    nameInput.style.maxHeight = "0";
    nameInput.style.overflow = "hidden"; 
    dato.innerHTML = "Iniciar Sesión";
    signUp.classList.add("disable");
    signIn.classList.remove("disable");
};

signUp.onclick = function(event) {
    event.preventDefault(); 
    nameInput.style.maxHeight = "60px";
    nameInput.style.overflow = "visible"; 
    dato.innerHTML = "Registrarse";
    signUp.classList.remove("disable");
    signIn.classList.add("disable");
};
