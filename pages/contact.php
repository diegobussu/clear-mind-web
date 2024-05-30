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
            <form id="contactForm">
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

    <!-- App Section -->
    <?php include __DIR__ . '../../components/section_app.php'; ?>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <script src="<?php echo get_base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#contactForm').submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '<?php echo get_base_url(); ?>public/script/send_email.php',
                    data: $(this).serialize(),
                    success: function(response){
                        if(response == 'success'){
                            $('#formMessage').html('<p class="success">Votre message a été envoyé avec succès.</p>');
                            $('#contactForm')[0].reset();
                        } else {
                            $('#formMessage').html('<p class="error">Une erreur s\'est produite lors de l\'envoi du message.</p>');
                        }
                        setTimeout(function(){
                            $('#formMessage').empty();
                        }, 3000);
                    }
                });
            });
        });
    </script>
</body>
</html>
