<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../components/header.php'; ?>

    <div class="margin-large text-align-center">
        <h3 class="heading-style-h3">Aide</h3>
    </div>

    <section class="help-section">
        <div class="help-column">
            <a href="articles/started" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/started.svg" class="help-image" alt="Started icon">
                    <h5 class="heading-style-h5">Premiers pas</h5>
                    <p class="text-size-large text-color-grey">Découvrez les étapes essentielles pour commencer à utiliser notre application.</p>
                    <div class="text-style-pre-header">4 articles</div>
                </div>
            </a>

            <a href="articles/features" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/features.svg" class="help-image" alt="Features icon">
                    <h5 class="heading-style-h5">Personnalisation</h5>
                    <p class="text-size-large text-color-grey">Explorez diverses options de personnalisation pour adapter l'application à vos besoins.</p>
                    <div class="text-style-pre-header">5 articles</div>
                </div>
            </a>

            <a href="articles/privacy" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/privacy.svg" class="help-image" alt="Privacy icon">
                    <h5 class="heading-style-h5">Confidentialité et sécurité</h5>
                    <p class="text-size-large text-color-grey">Informez-vous sur nos mesures de sécurité et comment nous protégeons vos données.</p>
                    <div class="text-style-pre-header">3 articles</div>
                </div>
            </a>

        </div>
        <div class="help-column">

            <a href="articles/widgets" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/widgets.svg" class="help-image" alt="Widgets icon">
                    <h5 class="heading-style-h5">Widgets</h5>
                    <p class="text-size-large text-color-grey">Apprenez à personnaliser et utiliser les widgets pour améliorer votre expérience utilisateur.</p>
                    <div class="text-style-pre-header">4 articles</div>
                </div>
            </a>

            <a href="articles/premium" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/premium.svg" class="help-image" alt="Premium icon">
                    <h5 class="heading-style-h5">Clear Mind Premium</h5>
                    <p class="text-size-large text-color-grey">Découvrez les fonctionnalités exclusives de notre abonnement premium.</p>
                    <div class="text-style-pre-header">2 articles</div>
                </div>
            </a>

            <a href="articles/other" class="help-link">
                <div class="help-block">
                    <img src="<?php echo get_base_url(); ?>public/img/other.svg" class="help-image" alt="Other icon">
                    <h5 class="heading-style-h5">Divers</h5>
                    <p class="text-size-large text-color-grey">Retrouvez une variété d'articles sur des sujets divers liés à l'application.</p>
                    <div class="text-style-pre-header">7 articles</div>
                </div>
            </a>

        </div>
    </section>

    <div class="margin-large text-align-center">
        <a href="mailto:contact@clear-mind.fr">contact@clear-mind.fr</a>
    </div>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
</body>
</html>
