<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<title>Clear Mind - Aide</title>

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
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fstarted.svg?alt=media&token=6ea07927-4c08-41db-84a9-b55dfc45a1ae" class="help-image" alt="Started icon">
                    <h5 class="heading-style-h5">Premiers pas</h5>
                    <p class="text-size-large text-color-grey">Découvrez les étapes essentielles pour commencer à utiliser notre application.</p>
                    <div class="text-style-pre-header">4 articles</div>
                </div>
            </a>

            <a href="articles/features" class="help-link">
                <div class="help-block">
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Ffeatures.svg?alt=media&token=29763224-f751-4fbb-aa1a-855e165c9b9d" class="help-image" alt="Features icon">
                    <h5 class="heading-style-h5">Personnalisation</h5>
                    <p class="text-size-large text-color-grey">Explorez diverses options de personnalisation pour adapter l&#39;application à vos besoins.</p>
                    <div class="text-style-pre-header">5 articles</div>
                </div>
            </a>

            <a href="articles/privacy" class="help-link">
                <div class="help-block">
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fprivacy.svg?alt=media&token=e35349f2-d7a7-4de3-9c38-f4a0c21c8620" class="help-image" alt="Privacy icon">
                    <h5 class="heading-style-h5">Confidentialité et sécurité</h5>
                    <p class="text-size-large text-color-grey">Informez-vous sur nos mesures de sécurité et comment nous protégeons vos données.</p>
                    <div class="text-style-pre-header">3 articles</div>
                </div>
            </a>

        </div>
        <div class="help-column">

            <a href="articles/widgets" class="help-link">
                <div class="help-block">
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fwidgets.svg?alt=media&token=c926c625-239b-4037-abb0-1ffd62d671d1" class="help-image" alt="Widgets icon">
                    <h5 class="heading-style-h5">Widgets</h5>
                    <p class="text-size-large text-color-grey">Apprenez à personnaliser et utiliser les widgets pour améliorer votre expérience utilisateur.</p>
                    <div class="text-style-pre-header">4 articles</div>
                </div>
            </a>

            <a href="articles/premium" class="help-link">
                <div class="help-block">
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fpremium.svg?alt=media&token=a274d782-16ba-464c-9d40-123770cddd3a" class="help-image" alt="Premium icon">
                    <h5 class="heading-style-h5">Clear Mind Premium</h5>
                    <p class="text-size-large text-color-grey">Découvrez les fonctionnalités exclusives de notre abonnement premium.</p>
                    <div class="text-style-pre-header">2 articles</div>
                </div>
            </a>

            <a href="articles/other" class="help-link">
                <div class="help-block">
                    <img src="https://firebasestorage.googleapis.com/v0/b/my-digital-project-aa48f.appspot.com/o/web%2Fother.svg?alt=media&token=7e408839-e140-492f-9cf2-f840e66a95e2" class="help-image" alt="Other icon">
                    <h5 class="heading-style-h5">Divers</h5>
                    <p class="text-size-large text-color-grey">Retrouvez une variété d&#39;articles sur des sujets divers liés à l&#39;application.</p>
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
