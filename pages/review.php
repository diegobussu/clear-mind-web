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
            <div class="review-container">
            <div id="review-box" class="review-box">
                <div class="review-content">
                    <img id="review-image-left" class="review-image-left" src="" alt="Icone d'avis">
                    <div class="review-text-container">
                        <p id="review-text" class="review-text"></p>
                        <p id="review-author" class="review-author"></p>
                    </div>
                </div>
                <img id="review-image" class="review-image" src="" alt="Icone d'avis">
            </div>
                <div class="navigation-dots">
                    <span class="dot" onclick="showReview(0)"></span>
                    <span class="dot" onclick="showReview(1)"></span>
                    <span class="dot" onclick="showReview(2)"></span>
                    <span class="dot" onclick="showReview(3)"></span>
                    <span class="dot" onclick="showReview(4)"></span>
                    <span class="dot" onclick="showReview(5)"></span>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
    <script src="<?php echo get_base_url(); ?>public/js/review.js" type="text/javascript"></script>
</body>
</html>
