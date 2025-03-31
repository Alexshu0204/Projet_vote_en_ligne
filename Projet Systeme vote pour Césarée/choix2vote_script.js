let count = 1;

function ajouterValeur() {
    let input = document.getElementById("inputValeur");
    let valeur = input.value.trim(); // Supprime les espaces inutiles

    if (valeur !== "") { // Vérifie que l'input n'est pas vide
        let tableBody = document.getElementById("tableBody");
        let newRow = tableBody.insertRow();
        
        let cell1 = newRow.insertCell(0);
        let cell2 = newRow.insertCell(1);
        let cell3 = newRow.insertCell(2);

        //cell1.textContent = count++; // Numérotation automatique
        cell2.textContent = valeur;

        //Création du bouton supprimer
        let deleteBtn = document.createElement("Button");
        deleteBtn.innerHTML = "❌";
        deleteBtn.classList.add("delete-btn");
        deleteBtn.onclick = function() {
            newRow.remove();
            mettreAJourNumerotation();// Mettre à jour les numéros après suppression
        };

        cell3.appendChild(deleteBtn);
        tableBody.appendChild(newRow);

        mettreAJourNumerotation();// Met à jour la numérotation après chaque ajout
        input.value = ""; // Réinitialise l'input après ajout
        input.focus(); // Remet le focus sur l'input
    }
}

// Met à jour la numérotation des lignes
function mettreAJourNumerotation(){
    let tableBody = document.getElementById("tableBody");
    let rows = tableBody.getElementsByTagName("tr");

    for (let i = 0; i < rows.length; i++){
        rows[i].cells[0].textContent = i + 1;// Re-numérote les lignes
    }
}

// Permet d'ajouter une valeur en appuyant sur "Entrée"
document.getElementById("inputValeur").addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        ajouterValeur();
    }
});