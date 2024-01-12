<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AnniH
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function annih_enques() {
	// Styles
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
	wp_enqueue_style('main-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
	//scripts
	wp_enqueue_script( 'script-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '', true );
	wp_enqueue_script( 'script-main', get_template_directory_uri() . '/js/main.js', array("jquery"), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'annih_enques' );


/**
 *
 * @link https://developer.wordpress.org/reference/hooks/init/
 */
function annih_blocks() {
    /**
     *
     * @link https://developer.wordpress.org/reference/functions/register_block_type/
     */
    register_block_type( __DIR__ . '/blocks/carousel' );
	register_block_type( __DIR__ . '/blocks/textblock' );
}
// Here we call our tt3child_register_acf_block() function on init.
add_action( 'init', 'annih_blocks' );


function header_hook() {
    ?>
    	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;0,9..40,1000;1,9..40,400;1,9..40,600;1,9..40,1000&display=swap" rel="stylesheet">
    <?php
}
add_action('wp_head', 'header_hook', 2);
?>