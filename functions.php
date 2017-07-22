<?php
// import stylesheet
function esm_altoetting_scripts () {
	wp_enqueue_style( 'style.css', get_stylesheet_uri() );

	wp_register_style('main.css', get_template_directory_uri() . '/assets/css/main.css', false, NULL, 'all' );
	wp_enqueue_style('main.css');

	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), NULL, true );
	wp_enqueue_script( 'main-js' );

	// Creates JavaScirpt obejct to localize template URL
	$wnm_custom = array( 'stylesheet_directory_uri' => get_stylesheet_directory_uri() );
	wp_localize_script( 'main-js', 'directory_uri', $wnm_custom );
}

// so the previous code actualy runs
add_action('wp_enqueue_scripts', 'esm_altoetting_scripts');

// theme setup
function esm_altoetting_theme_setup(){

	// navigation menus
	register_nav_menus(array(
		'menu-top-bar' => __('Top bar menu'),
	));

	// add featured image support
	add_theme_support('post-thumbnails');
	// define image sizes
	set_post_thumbnail_size( 360, 270, true );
}

add_action('after_setup_theme', 'esm_altoetting_theme_setup');

// customizations (colors)
require_once('inc/customizations.php');

// add customize option to various page elements
function esm_altoetting_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('esm-edit-content', array(
			'title' => 'Edit content', 
		));

	$wp_customize->add_setting('esm-home-page-gradient-card-headline', array(
			'default' => 'Emmanuel School of Mission',
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-headline-control', array(
			'label' => 'Headline',
			'section' => 'esm-edit-content',
			'settings' => 'esm-home-page-gradient-card-headline'
		)) );

	$wp_customize->add_setting('esm-home-page-gradient-card-paragraph', array(
			'default' => 'Die ESM ist eine Evangelisationsschule der Gemeinschaft Emmanuel e.V. die jungen Christen zwischen 18 und 30 Jahren eine katholisch theologische, philosophische und humanistische Ausbildung bietet. Es geht um eine persönliche Bezieh ung zu Gott und um ein Fundament im Glauben, das ins eigene Leben und zu den Menschen unserer Welt ausstrahlt. Ein geistliches und gemeinschaftliches Leben stehen dabei im Mittelpunkt. ',
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'esm-edit-content',
			'settings' => 'esm-home-page-gradient-card-paragraph',
			'type' => 'textarea'
		)) );

}

add_action( 'customize_register', 'esm_altoetting_customize_elements' );

?>