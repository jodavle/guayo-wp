<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduardoPinillos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	</footer><!-- #colophon -->
</div><!-- #page -->

<section class="hero is-large is-primary is-bold" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/images/footer.png');background-repeat: no-repeat;">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Eduardo Pinillos
            </h1>
            <h2>
                <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eduardopinillos' ) ); ?>">
                    <?php
                    /* translators: %s: CMS name, i.e. WordPress. */
                    printf( esc_html__( 'Proudly powered by %s', 'eduardopinillos' ), 'WordPress' );
                    ?>
                </a>
                <span class="sep"> | </span>
                    <?php
                    /* translators: 1: Theme name, 2: Theme author. */
                    printf( esc_html__( 'Theme: %1$s by %2$s.', 'eduardopinillos' ), 'eduardopinillos', '<a href="http://underscores.me/">Underscores.me</a>' );
                    ?>
                </div><!-- .site-info -->

            </h2>
            <a class="button is-primary is-inverted is-rounded is-medium" href="#">
                <span class="icon has-text-success">
                    <i class="fab fa-spotify"></i>
                </span>
                <span>Spotify</span>
            </a>
            <a class="button is-primary is-inverted is-rounded is-medium" href="#">
                <span class="icon">
                    <span class="fa-apple-music fa-stack">
                        <i class="fas fa-square fa-stack-2x"></i>
                        <i class="fas fa-music fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
                <span>Apple Music</span>
            </a>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
