<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<title>Clear Mind - Mentions légales</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../components/header.php'; ?>
    
    <main class="margin-large text-align-center">
        <h3 class="heading-style-h3">Mentions légales</h3>
        <div class="text-weight-bold padding-xxsmall">Entrée en vigueur le 21/05/2024</div>

        <div class="section">
            <div class="text-weight-bold padding-xxsmall">Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et visiteurs, du site clear-mind.fr, les présentes mentions légales.</div>
            <div class="text-weight-bold padding-xxsmall">La connexion et la navigation sur le Site par l’Utilisateur impliquent acceptation intégrale et sans réserve des présentes mentions légales. Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».</div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">ARTICLE 1 - L'EDITEUR</h3>
            <div class="text-weight-bold padding-xxsmall">L'édition du Site est assurée par CLEAR MIND au capital de XXX € euros, immatriculée au Registre du Commerce et des Sociétés de Paris sous le numéro B 456 186 XXX dont le siège social est situé au 40 RUE DU CHEMIN VERT 75011 PARIS.</div>
            <div class="text-weight-bold padding-xxsmall">Numéro de téléphone : 01 55 07 07 XX</div>
            <div class="text-weight-bold padding-xxsmall">Adresse e-mail : contact@clear-mind.fr</div>
            <div class="text-weight-bold padding-xxsmall">N° de TVA intracommunautaire : FR64134057XXX</div>
            <div class="text-weight-bold padding-xxsmall">Le Directeur de la publication est Anatole GUERREAU.</div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">ARTICLE 2 - L'HEBERGEUR</h3>
            <div class="text-weight-bold padding-xxsmall">L'hébergeur du Site est la société OVH, dont le siège social est situé au SASU 2 RUE KELLERMANN 59100 ROUBAIX, avec le numéro de téléphone : 0972101007 ou l'adresse e-mail : cil@ovh.net</div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">ARTICLE 3 - ACCES AU SITE</h3>
            <div class="text-weight-bold padding-xxsmall">Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou non et pouvant découlant d’une nécessité de maintenance. En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.</div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
</body>
</html>
