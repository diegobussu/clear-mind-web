<?php
// Inclure le fichier de configuration
include __DIR__ . '../../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../../components/head.php'; ?>

<title>Clear Mind - Premiers pas</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../../components/header.php'; ?>

    <div class="margin-large text-align-center">
        <h3 class="heading-style-h3">Premiers pas</h3>

        <div class="help-article" id="article1">
            <h4>Article 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
        </div>

        <div class="help-article" id="article2">
            <h4>Article 2</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
        </div>

        <div class="help-article" id="article3">
            <h4>Article 3</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
        </div>

        <div class="help-article" id="article4">
            <h4>Article 4</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
        </div>

        <div class="return-help margin-large">
            <a href="<?php echo get_base_url(); ?>pages/help">
                <img src="<?php echo get_base_url(); ?>public/img/return.svg" class="return-img" width="50px;" height="50px">
            </a>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../../components/script.php'; ?>

    <script src="<?php echo get_base_url(); ?>public/js/article.js" type="text/javascript"></script>
</body>
</html>
