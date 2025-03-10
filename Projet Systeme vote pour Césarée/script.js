document.addEventListener("DOMContentLoaded",function(){
    const loginForm = document.getElementById("loginForm");
    const loginButton = document.getElementById("loginButton");
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const errorMessage = document.getElementById("errorMessage");
    const togglePassword = document.getElementById("togglePassword");

    function changeFavion(src) {
        let link = document.querySelector("link[rel]~='icon'");
        if (!link){
            link = document.createElement("link");
            link.rel = "icon";
            document.head.appendChild(link);
        }
        link.href = src;
    }

    //Toggle visiblilité du MDP
    togglePassword.addEventListener("click", function(){
        if (password.type === "password"){
            password.type = "text";
            togglePassword.classList.replace("bx-toggle-left", "bx-toggle-right");
        }else{
            password.type = "password";
            togglePassword.classList.replace("bx-toggle-right", "bx-toggle-left");
        }
    });

    loginForm.addEventListener("submit", function(e){
        e.preventDefault();

        //Réinitialise les styles d'erreur
        username.classList.remove("input-error");
        password.classList.remove("input-error");
        errorMessage.style.display = "none";  // Masque le message d'erreur à chaque tentative de soumission

        //vérifier si les champs sont vides
        if(username.value.trim() === "" || password.value.trim() === ""){
            errorMessage.style.display = "block";
            username.classList.add("input-error");
            password.classList.add("input-error");
            return;
        }

        // Activer animation de chargement
        loginButton.classList.add("loading");
        loginButton.disabled = true; // Désactise le bouton

        document.title = "Connexion en cours...";

        /***********************************************************************
        -------------------------- Simuler une reqête---------------------------
        ***********************************************************************/

        

        setTimeout(() => {
            document.title = "Athentification";
            

            if(username.value === "admin" && password.value === "1234"){
                window.location.href = "acceuil.html";
            }else{
                errorMessage.style.display = "block";
                username.classList.add("input-error");
                password.classList.add("input-error");
            }


            loginButton.classList.remove("loading");
            loginButton.disabled = false; //Réactive le bouton 
        }, 2000);  

        
    });
});