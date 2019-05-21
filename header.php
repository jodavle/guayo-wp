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
            <img src="<?php the_custom_logo(); ?>" alt="">
            </div>
        </div>
        <div class="ele">
            <div class="triangle"></div>
        </div>
    </div>



	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'eduardopinillos' ); ?></a>

<header id="masthead" class="site-header">
    <div class="hero-head site-branding">
        <nav class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img src="<?php the_custom_logo?>" alt=""><span class="navbar-burger burger menu" aria-controls="primary-menu" aria-expanded="false">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span></a>
                    <div id="navbarMenuHeroA" class="navbar-menu">
                        <div class="navbar-end"><?php esc_html_e('Primary Menu', 'eduardopinillos');?>
                        <?php
                            $menuParameters = array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'container'       => false,
                                'echo'            => false,
                                'items_wrap'      => '%3$s',
                                'depth'           => 0,
                            ) );

                            echo strip_tags(wp_nav_menu( $menuParameters ), '<a class="navbar-item">' );
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header><!-- #masthead -->
<div id="content" class="site-content">
