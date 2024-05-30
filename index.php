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
        
        <div class="main-wrapper">
                <section class="section_home-hero">
                    <div class="padding-global">
                        <div class="container-medium">
                            <div class="padding-section-small">
                                <div class="w-layout-grid home-hero_component">
                                    <div id="w-node-ba881e29-fefd-d2f4-f31c-47e31ea4972d-62fad666" class="home-hero_content">
                                        <div class="margin-bottom margin-xxsmall">
                                            <h1 class="heading-style-h1">Tenir un journal n&#39;a jamais été aussi facile</h1>
                                        </div>
                                        <div class="margin-bottom margin-xsmall">
                                            <p class="text-size-large text-color-grey">Journal sécurisé avec un suivi d&#39;humeur et une aide personnalisé à votre santé mentale.</p>
                                        </div>
                                        <div class="margin-top margin-medium">
                                            <div class="button-group">
                                                <div class="home-hero_app-button-wrapper">
                                                    <a href="#" class="link-style_app w-inline-block">
                                                        <img src="<?php echo get_base_url(); ?>public/img/apple-store.svg" width="167" alt="Download on the App Store button."/>
                                                    </a>
                                                    <a href="#" class="link-style_app w-inline-block">
                                                        <img src="<?php echo get_base_url(); ?>public/img/google-play.svg" width="175" alt="Download on the Google Play button."/>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="w-node-ba881e29-fefd-d2f4-f31c-47e31ea49744-62fad666" class="home-hero_image-wrapper">
                                        <img src="https://via.placeholder.com/916x980" alt="Placeholder Image" class="home-hero_image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="about" class="section_feature">
                    <div class="padding-global">
                        <div class="padding-global">
                            <div class="container-small">
                                <div class="padding-section-small">
                                    <div class="w-layout-grid feature_component">
                                        <div id="w-node-_41753888-1434-d2ad-cd31-4612fd6daffd-62fad666" class="feature_image-wrapper">
                                            <img src="https://via.placeholder.com/800x1099" alt="Placeholder Image" class="feature_image"/>
                                        </div>
                                        <div class="feature_content">
                                            <div class="margin-bottom margin-small">
                                                <h2 class="heading-style-h3">Lorem ipsum dolor sit amet.</h2>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet.<br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-small">
                            <div class="padding-section-small">
                                <div class="w-layout-grid feature_component">
                                    <div class="feature_content">
                                        <div class="feature_content">
                                            <div class="margin-bottom margin-small">
                                                <div class="text-style-pre-header">Lorem ipsum dolor sit amet</div>
                                            </div>
                                            <div class="margin-bottom margin-small">
                                                <h2 class="heading-style-h3">Lorem ipsum dolor sit amet.</h2>
                                            </div>
                                            <p>
                                                Lorem ipsum dolor sit amet.<br/>
                                            </p>
                                        </div>
                                    </div>
                                    <div id="w-node-_7c855d61-bb35-3f87-d1d8-c8673404615e-62fad666" class="feature_image-wrapper">
                                        <img src="https://via.placeholder.com/800x1099" alt="Placeholder Image" class="feature_image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_feature">
                    <div class="padding-global">
                        <div class="container-small">
                            <div class="padding-section-small">
                                <div class="w-layout-grid feature_component">
                                    <div id="w-node-_4d06d975-c9fb-c596-597a-a4f2def5adea-62fad666" class="feature_image-wrapper">
                                        <img src="https://via.placeholder.com/800x1099" alt="Placeholder Image" class="feature_image"/>
                                    </div>
                                    <div class="feature_content">
                                        <div class="margin-bottom margin-small">
                                            <div class="text-style-pre-header">Lorem ipsum dolor sit amet</div>
                                        </div>
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h3">Lorem ipsum dolor sit amet.</h2>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet.<br/>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_feature">
                    <div class="padding-global">
                        <div class="container-small">
                            <div class="padding-section-small">
                                <div class="w-layout-grid feature_component">
                                    <div class="feature_content">
                                        <div class="margin-bottom margin-small">
                                            <div class="text-style-pre-header">Lorem ipsum dolor sit amet</div>
                                        </div>
                                        <div class="margin-bottom margin-small">
                                            <h2 class="heading-style-h3">Lorem ipsum dolor sit amet.</h2>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div id="w-node-e501ae82-f472-a26c-1f04-afd78a9d5493-62fad666" class="feature_image-wrapper">
                                        <img src="https://via.placeholder.com/800x1099" alt="Placeholder Image" class="feature_image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section_cta">
                    <div class="padding-global">
                        <div class="container-small">
                            <div class="line-decal hide-mobile-landscape"></div>
                            <div class="padding-section-medium">
                                <div class="text-align-center">
                                    <div class="margin-bottom margin-large">
                                        <h3 class="heading-style-h3">Commencez votre journal avec Clear Mind aujourd&#39;hui.</h3>
                                    </div>
                                    <p class="text-size-xxlarge">Obtenez gratuitement un journal accessible et sécurisé, une aide et un suivi personnalisé !</p>
                                    <div class="margin-top margin-medium">
                                        <div class="button-group is-center">
                                            <a href="#" class="link-style_app w-inline-block">
                                                <img src="<?php echo get_base_url(); ?>public/img/apple-store.svg" width="167" alt="Download on the App Store button."/>
                                            </a>
                                            <a href="#" class="link-style_app w-inline-block">
                                                <img src="<?php echo get_base_url(); ?>public/img/google-play.svg" width="175" alt="Download on the Google Play button."/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="line-decal hide-mobile-landscape"></div>
                        </div>
                    </div>
                </section>
            </div>

        <!-- Footer Section -->
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>
</body>