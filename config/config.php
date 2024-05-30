<?php 
    function get_base_url() {
        // Compte le nombre de barres obliques (/) dans le chemin du script en cours d'exécution
        // Cela donne le niveau de profondeur du script dans la hiérarchie des dossiers
        $depth = substr_count($_SERVER['SCRIPT_NAME'], '/') - 1;

        // Génère un chemin relatif en remontant de la profondeur calculée
        // str_repeat('../', $depth) crée une chaîne contenant "../" répété autant de fois que la profondeur
        $relative_path = str_repeat('../', $depth);

        // Retourne le chemin relatif calculé
        return $relative_path;
    }
?>
