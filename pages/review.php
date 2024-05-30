<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<title>Clear Mind - Avis</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../components/header.php'; ?>

    <main class="margin-large text-align-center">
        <div class="section">
            <h3 class="heading-style-h3">Avis</h3>
        </div>
    </main>

    <section class="section_cta">
        <div class="padding-global">
            <div class="container-small">
                <div class="line-decal hide-mobile-landscape"></div>
                <div class="padding-section-medium">
                    <div class="text-align-center">
                        <div class="margin-bottom margin-large">
                            <h3 class="heading-style-h3">Commencez votre journal avec Clear Mind aujourd&#39;hui.</h3>
                        </div>
                        <p class="text-size-xxlarge">Obtenez gratuitement un journal accessible et sécurisé, une aide et un suivi personnalisé !</p>
                        <div class="margin-top margin-medium">
                            <div class="button-group is-center">
                                <a href="#" class="link-style_app w-inline-block">
                                    <img src="<?php echo get_base_url(); ?>public/img/apple-store.svg" width="167" alt="Download on the App Store button."/>
                                </a>
                                <a href="#" class="link-style_app w-inline-block">
                                    <img src="<?php echo get_base_url(); ?>public/img/google-play.svg" width="175" alt="Download on the Google Play button."/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-decal hide-mobile-landscape"></div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>
</body>
</html>
