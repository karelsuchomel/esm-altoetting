<?php
// customization partials for partial refresh

// Front-page gradient card
function homePageGradientCardHeadline() {
	echo get_theme_mod('esm-home-page-gradient-card-headline');
}
function homePageGradientCardParagraph() {
	echo get_theme_mod('esm-home-page-gradient-card-paragraph');
}
function homePageGradientCardImage() {
	echo get_theme_mod('esm-home-page-gradient-card-image');
}

// Front-page 4 boxes
// 1st box
function frontPage4boxes1stboxHeadline() {
	echo get_theme_mod('esm-home-page-4boxes-1stbox-headline');
}
function frontPage4boxes1stboxParagraph() {
	echo get_theme_mod('esm-home-page-4boxes-1stbox-paragraph');
}
// 2nd box
function frontPage4boxes2ndboxHeadline() {
	echo get_theme_mod('esm-home-page-4boxes-2ndbox-headline');
}
function frontPage4boxes2ndboxParagraph() {
	echo get_theme_mod('esm-home-page-4boxes-2ndbox-paragraph');
}
// 3rd box
function frontPage4boxes3rdboxHeadline() {
	echo get_theme_mod('esm-home-page-4boxes-3rdbox-headline');
}
function frontPage4boxes3rdboxParagraph() {
	echo get_theme_mod('esm-home-page-4boxes-3rdbox-paragraph');
}
// 4th box
function frontPage4boxes4thboxHeadline() {
	echo get_theme_mod('esm-home-page-4boxes-4thbox-headline');
}
function frontPage4boxes4thboxParagraph() {
	echo get_theme_mod('esm-home-page-4boxes-4thbox-paragraph');
}

// Quotation box
function frontPageQuotationBox() {
	echo get_theme_mod('esm-home-page-quotation-paragraph');
}

// Front-page Two boxes
// 1st box
function frontPage2boxes1stboxHeadline() {
	echo get_theme_mod('esm-home-page-2boxes-1stbox-headline');
}
function frontPage2boxes1stboxParagraph() {
	echo get_theme_mod('esm-home-page-2boxes-1stbox-paragraph');
}
function frontPage2boxes1stboxButton() {
	echo get_theme_mod('esm-home-page-2boxes-1stbox-button');
}

// footer
function footerContactBlock() {
	echo get_theme_mod('esm-footer-details-card');
}
function footerCooperationBlock() {
	echo get_theme_mod('esm-footer-cooperation-details');
}

// add customize option to various page elements
function esm_altoetting_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('esm-frontpage-header-content', array(
			'title' => 'Front-page', 
		));
	$wp_customize->add_section('esm-footer-content', array(
			'title' => 'Footer', 
		));

	// Front page (Hero image, title, annotation, 4 boxes title and text, qutote text, 2 boxes text, title and mailto button)
	include_once('custom-editing-partials/front-page-editing.php');

	// Footer (2 text boxes)
	include_once('custom-editing-partials/footer-editing.php');
}

add_action( 'customize_register', 'esm_altoetting_customize_elements' );
