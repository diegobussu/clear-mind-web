<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        // Récupérer l'adresse e-mail de la requête
        $email = $_POST["email"];

        // Paramètres de l'e-mail
        $to = "contact@clear-mind.fr";
        $subject = "Nouvelle demande de version bêta";
        $message = "Une nouvelle demande de version bêta a été soumise avec l'adresse e-mail : $email";

        // En-têtes de l'e-mail
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Envoi de l'e-mail
        if (mail($to, $subject, $message, $headers)) {
            echo "E-mail envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }
    } else {
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}
?>
