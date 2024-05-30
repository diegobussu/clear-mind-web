<?php
// Inclure le fichier de configuration
include __DIR__ . '../../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../../components/head.php'; ?>

<title>Clear Mind - Divers</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../../components/header.php'; ?>

    <div class="margin-large text-align-center">
        <h3 class="heading-style-h3">Divers</h3>
    </div>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../../components/footer.php'; ?>

    <script src="<?php echo get_base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_base_url(); ?>public/js/index.js" type="text/javascript"></script>
</body>
</html>
