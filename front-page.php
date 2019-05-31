<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

        <div class="bootScreenAnimation">
            <div class="ele">
                <div class="line"></div>
            </div>
            <div class="eleLogo">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
            </div>
            <div class="ele">
                <div class="triangle"></div>
            </div>
        </div>

        <video id="cover_video" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/Superb_sunset.mp4" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/Superb_sunset.webm" type="video/webm">
            Sorry, your browser does not support HTML5 video.
        </video>

        <section class="hero is-primary is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item">
                            <img src="<?php /*the_custom_logo();*/
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                echo $image[0];
                            ?>" alt="logotipo" />
                        </a>
                        <span role="button" class="navbar-burger burger" data-target="navMenu" aria-label="menu" aria-controls="primary-menu" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <?php eduardopinillos_pri_menu(); ?>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Eduardo Pinillos</h1>
                <h2 class="subtitle">
                    <a class="button is-dark is-rounded" href="https://spotify.com">
                        <span class="icon has-text-success"><i class="fab fa-spotify"></i></span>
                        <span>
                            Escucha "Bailame Lento"
                        </span>
                    </a>
                </h2>
            </div>
        </div>

        <div class="circle-data">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
                <defs>
                    <path d="
                    M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                   id="textcircle" />
                </defs>
                    <text dy="70" textLength="1200">
                            <textPath xlink:href="#textcircle">
                                        Nuevo Lanzamiento - Nuevo Lanzamiento -
                                                </textPath>
                                                    </text>
            </svg>
        </div>
        <!-- Hero footer: will stick at the bottom -->
            <div class="hero-foot">
                <nav class="tabs">
                    <div class="container">
                        <ul>
                            <li class="is-active">
                                <a href="single.html">Contrato de uso</a>
                            </li>
                            <li>
                                <a href="single.html">Sitio por Contraforma</a>
                            </li>
            </ul>
            </div>
        </nav>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>
