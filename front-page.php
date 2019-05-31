<?php

get_header();
?>

        <video id="cover_video" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/Superb_sunset.mp4" type="video/mp4">
        <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/Superb_sunset.webm" type="video/webm">
            Sorry, your browser does not support HTML5 video.
        </video>

        <section class="hero is-primary is-fullheight">
        <!-- Hero head: will stick at the top -->
        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Eduardo Pinillos</h1>
                <h2 class="subtitle">
<span>
<?php echo get_theme_mod('eduardopinillos_circle_callout-fp-text', 'Esto es un texto de ejemplo') ?>
</span></br>
                    <a class="button is-dark is-rounded" href="<?php echo get_theme_mod('eduardopinillos_circle_callout-cancion-link') ?>">
                        <span class="icon has-text-success"><i class="fab fa-spotify"></i></span>
                        <span>
                            <?php echo get_theme_mod('eduardopinillos_circle_callout-cancion') ?>
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
<?php echo get_theme_mod('eduardopinillos_circle_callout-headline', 'Nuevos lanzamientos - Nuevos eventos -') ?>
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
