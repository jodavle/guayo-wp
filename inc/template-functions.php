<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package eduardoPinillos
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function eduardopinillos_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'eduardopinillos_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function eduardopinillos_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'eduardopinillos_pingback_header' );

function eduardopinillos_circle_callout($wp_customize) {
    $wp_customize->add_section('eduardopinillos_circle_callout-section', array(
        'title' => 'Opciones del tema'
    ));

    $wp_customize->add_setting('eduardopinillos_circle_callout-headline', array(
        'default' => 'Texto de ejemplo - texto de ejemplo'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eduardopinillos_circle_callout-headline-control', array(
        'label' => 'Texto Circular',
        'section' => 'eduardopinillos_circle_callout-section',
        'settings' => 'eduardopinillos_circle_callout-headline',
    )));

    $wp_customize->add_setting('eduardopinillos_circle_callout-fp-text', array(
        'default' => 'Puedes usar etiquetas html aquí'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eduardopinillos_circle_callout-fp-text-control', array(
        'label' => 'Agrega texto o botones a la FrontPage',
        'section' => 'eduardopinillos_circle_callout-section',
        'settings' => 'eduardopinillos_circle_callout-fp-text',
        'type' => 'textarea',
    )));

    $wp_customize->add_setting('eduardopinillos_circle_callout-cancion', array(
        'default' => 'Escucha "Bailame Lento"'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eduardopinillos_circle_callout-cancion-control', array(
        'label' => 'Texto de canción en Spotify',
        'section' => 'eduardopinillos_circle_callout-section',
        'settings' => 'eduardopinillos_circle_callout-cancion',
    )));

    $wp_customize->add_setting('eduardopinillos_circle_callout-cancion-link', array(
        'default' => 'https://spotify.com'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'eduardopinillos_circle_callout-cancion-link-control', array(
        'label' => 'Link a spotify',
        'section' => 'eduardopinillos_circle_callout-section',
        'settings' => 'eduardopinillos_circle_callout-cancion-link',
    )));

}

add_action('customize_register','eduardopinillos_circle_callout');
