<?php
// Inclure le fichier de configuration
include __DIR__ . '../../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../../components/head.php'; ?>

<title>Clear Mind - Confidentialité et sécurité</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../../components/header.php'; ?>

    <div class="margin-large text-align-center">
        <h3 class="heading-style-h3">Confidentialité et sécurité</h3>
    </div>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../../components/script.php'; ?>
</body>
</html>
