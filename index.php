<?php
// Inclure le fichier de configuration
include __DIR__ . '/config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '/components/head.php'; ?>

<title>Clear Mind</title>

<body class="body-2">
    <div class="page-wrapper">
        <!-- Header Section -->
        <?php include __DIR__ . '/components/header.php'; ?>

        <!-- Footer Section -->
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>
</body>