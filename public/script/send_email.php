<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail où envoyer le message
    $to = "contact@clear-mind.fr";

    // Sujet de l'e-mail
    $subject = "Clear Mind Contact - Demande de $name";

    // Corps de l'e-mail
    $body = "Nom : $name\n\n";
    $body .= "Message : $message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Message de confirmation
        echo "success";
    } else {
        // Message d'erreur
        echo "error";
    }
} else {
    // Redirection vers la page de contact si le formulaire n'a pas été soumis
    header("Location: ../../contact.php");
}
?>
