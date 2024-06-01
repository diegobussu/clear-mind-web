// Création des éléments de la modal
var modal = document.createElement("div");
modal.id = "downloadModal";
modal.className = "modal";

var modalContent = document.createElement("div");
modalContent.className = "modal-content";

var closeButton = document.createElement("span");
closeButton.className = "close";
closeButton.innerHTML = "&times;";

var emailLabel = document.createElement("p");
emailLabel.textContent = "Veuillez entrer votre adresse e-mail pour recevoir la version bêta (prochainement)";
emailLabel.className = "margin-small heading-style-h5";

var emailInput = document.createElement("input");
emailInput.type = "email";
emailInput.id = "emailInput";
emailInput.placeholder = "Votre adresse e-mail";

var submitButton = document.createElement("button");
submitButton.id = "submitButton";
submitButton.textContent = "Envoyer";
submitButton.className = "margin-small button is-small is-secondary w-button";

// Ajout des éléments à la modal
modalContent.appendChild(closeButton);
modalContent.appendChild(emailLabel);
modalContent.appendChild(emailInput);
modalContent.appendChild(submitButton);
modal.appendChild(modalContent);

// Ajout de la modal à la fin du corps du document
document.body.appendChild(modal);

// Sélectionnez tous les boutons de téléchargement
var downloadButtons = document.querySelectorAll('.app-link');

// Sélectionnez la modal
var modal = document.getElementById("downloadModal");



downloadButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        modal.style.display = "block";
    });
});

// Ajoutez un écouteur d'événements de clic pour le bouton de fermeture
closeButton.addEventListener("click", function() {
    modal.style.display = "none";
});

// Fermez la modal lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});


// Ajoutez un écouteur d'événements de clic pour le bouton "Envoyer"
submitButton.addEventListener("click", function() {
    var emailValue = emailInput.value.trim();

    if (emailValue === "") {
        alert("Veuillez entrer une adresse e-mail.");
        return;
    }

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(emailValue)) {
        alert("Veuillez entrer une adresse e-mail valide.");
        return;
    }

    // Envoi des données de l'e-mail au fichier PHP via AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "public/script/get_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText);
            modal.style.display = "none";
        }
    };
    xhr.send("email=" + encodeURIComponent(emailValue));
});