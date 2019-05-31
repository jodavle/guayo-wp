<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eduardoPinillos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

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



<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eduardopinillos' ); ?></a>
<!--
<header id="masthead" class="site-header">
-->
    <section class="hero is-medium is-primary" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/dist/images/header.png');background-repeat:no-repeat;background-size:100% 100%;">
    <div class="hero-head site-branding">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        echo $image[0];
                    ?>"></a>
                    <span role="button" class="navbar-burger burger" data-target="navMenu" aria-label="menu" aria-controls="primary-menu" aria-expanded="false">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-end"><?/*php esc_html_e('Primary Menu', 'eduardopinillos');*/?>

                        <?php eduardopinillos_pri_menu(); ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="hero-body">
        <div class="container">
            <h2 class="title"><?php bloginfo('name');?></h2>
            <h3 class="subtitle"><?php bloginfo('description'); ?></h3>
        </div>
    </div>
    </section>
</header><!-- #masthead -->
<div id="content" class="site-content">
