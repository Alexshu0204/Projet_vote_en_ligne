document.addEventListener("DOMContentLoaded", function () {
    let nextButton = document.querySelector(".nextButton");
    let progressBar = document.getElementById("progressBar");

    mettreAJourLien(); // Vérifie au chargement si le lien doit être désactivé

    document.getElementById("inputValeur").addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            ajouterValeur();
        }
    });

    // Ajout de l'animation de la barre de progression au clic sur "Démarrer"
    nextButton.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection immédiate
        startLoading();

        // Redirige après 1 seconde
        setTimeout(() => {
            window.location.href = nextButton.getAttribute("href");
        }, 1000);
    });
});

// Fonction pour mettre à jour le lien "Démarrer"
function mettreAJourLien() {
    let tableBody = document.getElementById("tableBody");
    let nextButton = document.querySelector(".nextButton");

    if (tableBody.children.length < 2) {
        nextButton.classList.add("disabled");
        nextButton.removeAttribute("href");
    } else {
        nextButton.classList.remove("disabled");
        nextButton.setAttribute("href", "liste_evenement.html");
    }
}

// Fonction pour ajouter une ligne au tableau
function ajouterValeur() {
    let inputText = document.getElementById("inputValeur");
    let inputImage = document.getElementById("inputImage");
    let valeur = inputText.value.trim();
    let imageFile = inputImage.files[0];

    if (valeur !== "") {
        let tableBody = document.getElementById("tableBody");
        let newRow = tableBody.insertRow();

        let cell1 = newRow.insertCell(0);
        let cell2 = newRow.insertCell(1);
        let cell3 = newRow.insertCell(2);
        let cell4 = newRow.insertCell(3);

        cell1.textContent = tableBody.children.length;
        cell2.textContent = valeur;
        cell2.setAttribute("title", "Double-cliquez pour modifier");
        cell2.ondblclick = function () {
            rendreEditable(cell2);
        };

        // Si une image est sélectionnée
        if (imageFile) {
            let img = document.createElement("img");
            img.src = URL.createObjectURL(imageFile);
            img.alt = "Image de vote";
            img.style.maxWidth = "100px";
            img.style.height = "auto";
            cell3.appendChild(img);
        } else {
            cell3.textContent = "—";
        }

        let deleteBtn = document.createElement("button");
        deleteBtn.innerHTML = "❌";
        deleteBtn.classList.add("delete-btn");
        deleteBtn.onclick = function () {
            newRow.remove();
            mettreAJourNumerotation();
            mettreAJourLien();
        };

        cell4.appendChild(deleteBtn);
        inputText.value = "";
        inputImage.value = "";

        mettreAJourNumerotation();
        mettreAJourLien();
        inputText.focus();
    }
}


// Met à jour la numérotation des lignes
function mettreAJourNumerotation() {
    let tableBody = document.getElementById("tableBody");
    let rows = tableBody.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++) {
        rows[i].cells[0].textContent = i + 1; // Re-numérote les lignes
    }
}

// Fonction pour rendre une cellule éditable
function rendreEditable(cell) {
    let valeurActuelle = cell.textContent;
    let input = document.createElement("input");
    input.type = "text";
    input.value = valeurActuelle;
    input.classList.add("edit-input");

    cell.innerHTML = "";
    cell.appendChild(input);
    input.focus();

    input.addEventListener("blur", function () {
        cell.textContent = input.value || valeurActuelle; // Garde l'ancienne valeur si vide
    });

    input.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            cell.textContent = input.value || valeurActuelle;
        }
    });
}

// ====================
// Animation de la barre de progression
// ====================
function startLoading() {
    let progressBar = document.getElementById("progressBar");
    progressBar.style.width = "0%";
    progressBar.style.opacity = "1";
    let width = 0;

    function animateProgress() {
        if (width < 100) {
            width += Math.random() * 20; // Augmente aléatoirement la progression
            progressBar.style.width = width + "%";
            setTimeout(animateProgress, 100);
        } else {
            finishLoading();
        }
    }
    animateProgress();
}

function finishLoading() {
    let progressBar = document.getElementById("progressBar");
    progressBar.style.width = "100%";

    setTimeout(() => {
        progressBar.style.opacity = "0";

        setTimeout(() => {
            progressBar.style.width = "0%";
        }, 3000);

    });
}

