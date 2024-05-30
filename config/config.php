<?php
// Détecter l'environnement et définir l'URL de base
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    // Environnement local (MAMP)
    define('BASE_URL', '/clear-mind-web/');
} else {
    // Environnement de production (OVH)
    define('BASE_URL', '/');
}

// Fonction pour obtenir l'URL de base
function get_base_url() {
    return BASE_URL;
}
?>
