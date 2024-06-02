<?php
// Inclure le fichier de configuration
include __DIR__ . '../../config/config.php';

// Utiliser la constante BASE_URL définie dans config.php
$base_url = get_base_url();
?>

<!-- Head Section -->
<?php include __DIR__ . '../../components/head.php'; ?>

<title>Clear Mind - Nous découvrir</title>

<body class="body-2">
    <!-- Header Section -->
    <?php include __DIR__ . '../../components/header.php'; ?>

    <main class="margin-large text-align-center">
        <div class="section">
            <h3 class="heading-style-h3">Nous découvrir</h3>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">Bienvenue dans Clear Mind, l'application conçue pour être votre partenaire de bien-être mental !</h3>
            <div class="text-weight-bold padding-xxsmall">
                Dans un monde où le stress et les préoccupations quotidiennes peuvent peser lourd, 
                Clear Mind se veut une oasis de tranquillité et de compréhension personnelle. Spécialement conçue pour vous, les jeunes, 
                cette application mobile est bien plus qu'un simple outil de relaxation, c'est un véritable compagnon dans votre quête de 
                bien-être mental et de maîtrise de votre quotidien.
            </div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">Pourquoi Clear Mind est-elle faite pour vous ?</h3>

            <h5 class="heading-style-h5 padding-xxsmall">Pour mieux gérer votre stress</h5>
            <div class="text-weight-bold padding-xxsmall">Clear Mind vous aide à comprendre et à gérer votre stress grâce à un suivi 
                quotidien de vos émotions. Apprenez à reconnaître ce qui vous pèse et découvrez des moyens efficaces pour retrouver 
                votre sérénité.
            </div>

            <h5 class="heading-style-h5 padding-xxsmall">Pour un soutien psychologique accessibles</h5>
            <div class="text-weight-bold padding-xxsmall">Que vous ayez besoin de parler à un professionnel par chat ou visioconférence, 
                Clear Mind rend l'accompagnement psychologique accessible et facile à intégrer dans votre routine. Vous n'êtes jamais 
                seul dans votre parcours vers un meilleur équilibre mental.
            </div>

            <h5 class="heading-style-h5 padding-xxsmall">Pour structurer votre quotidien</h5>
            <div class="text-weight-bold padding-xxsmall">Une bonne organisation est essentielle à une bonne santé mentale. 
                Clear Mind vous propose des outils simples mais puissants pour planifier vos journées, suivre vos tâches et 
                gérer vos engagements de manière fluide.
            </div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">Avec Clear Mind, vous pouvez :</h3>
            <div class="text-weight-bold padding-xxsmall">
                - Journaliser vos émotions et suivre leur évolution.
                - Réfléchir quotidiennement à travers des prompts de journaling.
                - Utiliser des outils d'organisation pour mieux gérer votre temps et vos priorités.
                - Accéder à des guides et conseils pratiques pour prendre soin de votre santé mentale.
            </div>
        </div>

        <div class="section">
            <h3 class="heading-style-h3">Rejoignez la Révolution Clear Mind</h3>
            <div class="text-weight-bold padding-xxsmall">
                Clear Mind, c'est plus qu'une application, c'est une révolution dans la gestion personnelle de la santé 
                mentale et de l'organisation quotidienne. Nous sommes là pour vous soutenir constamment, vous aidant à 
                naviguer à travers les défis de la vie avec assurance et sérénité.
            </div>
        </div>

    </main>

    <!-- Footer Section -->
    <?php include __DIR__ . '../../components/footer.php'; ?>

    <!-- Script Section -->
    <?php include __DIR__ . '../../components/script.php'; ?>
</body>
</html>
