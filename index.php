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


                <section id="testimonials" class="section_testimonials">
                    <div class="padding-global">
                        <div class="container-small">
                            <div class="padding-section-small">
                                <div class="text-align-center">
                                    <h3 class="heading-style-h3">Rejoignez plus de 1000 personnes avec Clear Mind</h3>
                                    <div class="margin-top margin-large">
                                        <div data-delay="4000" data-animation="slide" class="testimonial-slider-two w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="6" data-duration="500" data-infinite="true">
                                            <div class="mask w-slider-mask">
                                                <div class="slide-3 w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji01.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Elodie</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/appstore.svg" alt="Apple store logo." title="Apple store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji02.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Christophe</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/appstore.svg" alt="Apple store logo." title="Apple store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji03.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Steve</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/appstore.svg" alt="Apple store logo." title="Apple store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji04.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Jordan</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/playstore.svg" alt="Play store logo." title="Play store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji05.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Clothilde</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/playstore.svg" alt="Play store logo." title="Play store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji06.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Jessica</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/appstore.svg" alt="Apple store logo." title="Apple store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji07.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Maude</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/playstore.svg" alt="Play store logo." title="Play store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji08.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Kristina</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/playstore.svg" alt="Play store logo." title="Play store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji09.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Claire</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/appstore.svg" alt="Apple store logo." title="Apple store" class="store-logo"/>
                                                    </div>
                                                </div>
                                                <div class="w-slide">
                                                    <div class="testimonial-slide">
                                                        <img src="<?php echo get_base_url(); ?>public/img/memoji11.webp" alt="Memoji of a clear mind user." class="testimonial-image-two"/>
                                                        <div class="testimonial-content">
                                                            <div class="testimonial-quote">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                            </div>
                                                            <div class="testimonial-info-two">
                                                                <div>
                                                                    <div class="text-weight-bold">Ludivine</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <img src="<?php echo get_base_url(); ?>public/img/playstore.svg" alt="Play store logo." title="Play store" class="store-logo"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-slider-arrow w-slider-arrow-left">
                                                <div class="w-icon-slider-left"></div>
                                            </div>
                                            <div class="testimonial-slider-arrow w-slider-arrow-right">
                                                <div class="w-icon-slider-right"></div>
                                            </div>
                                            <div class="testimonial-slider-nav w-slider-nav w-slider-nav-invert w-round"></div>
                                        </div>
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

    <script src="<?php echo get_base_url(); ?>public/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="<?php echo get_base_url(); ?>public/js/index.js" type="text/javascript"></script>
</body>