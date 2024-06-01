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

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
</body>
</html>
