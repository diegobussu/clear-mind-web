<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<title>Clear Mind - Contact</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../components/header.php'; ?>

    <main class="margin-large text-align-center">
        <h3 class="heading-style-h3 margin-large">Nous contacter</h3>
        <div class="contact-form">
            <form id="contactForm" action="<?php echo get_base_url(); ?>public/script/send_email.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" style="resize: none;" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                    <button class="button is-secondary" type="submit">Envoyer</button>
                </div>
            </form>
            <div id="formMessage"></div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
    <script src="<?php echo get_base_url(); ?>public/js/contact.js" type="text/javascript"></script>
</body>
</html>
