document.addEventListener("DOMContentLoaded", function() {
    var contactForm = document.getElementById("contactForm");
    var formMessage = document.getElementById("formMessage");

    contactForm.addEventListener("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(contactForm);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", contactForm.getAttribute("action"), true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    if (xhr.responseText === 'success') {
                        formMessage.innerHTML = '<p class="success">Votre message a été envoyé avec succès.</p>';
                        contactForm.reset();
                    } else {
                        formMessage.innerHTML = '<p class="error">Une erreur s\'est produite lors de l\'envoi du message.</p>';
                    }
                    setTimeout(function(){
                        formMessage.innerHTML = '';
                    }, 3000);
                } else {
                    formMessage.innerHTML = '<p class="error">Une erreur s\'est produite lors de l\'envoi du message.</p>';
                }
            }
        };
        xhr.send(formData);
    });
});
