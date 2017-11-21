<?php
// customization partials for partial refresh
function homePageGradientCardHeadline() {
	echo get_theme_mod('esm-home-page-gradient-card-headline');
}

function homePageGradientCardParagraph() {
	echo get_theme_mod('esm-home-page-gradient-card-paragraph');
}

function homePageGradientCardImage() {
	echo get_theme_mod('esm-home-page-gradient-card-image');
}

// footer functions
function footerContactBlock() {
	echo get_theme_mod('esm-footer-details-card');
}
function footerCooperationBlock() {
	echo get_theme_mod('esm-footer-cooperation-details');
}

// add customize option to various page elements
function esm_altoetting_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('esm-frontpage-header-content', array(
			'title' => 'Homepage - header ', 
		));
	$wp_customize->add_section('esm-footer-content', array(
			'title' => 'Footer', 
		));

	$wp_customize->add_setting('esm-home-page-gradient-card-headline', array(
			'default' => 'Emmanuel School of Mission',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-headline-control', array(
			'label' => 'Headline',
			'section' => 'esm-frontpage-header-content',
			'settings' => 'esm-home-page-gradient-card-headline'
		)) );

	$wp_customize->selective_refresh->add_partial( 'esm-home-page-gradient-card-headline', array(
		'selector'            => '.home-intro h1',
		'container_inclusive' => false,
		'render_callback'     => 'homePageGradientCardHeadline',
	) );

	$wp_customize->add_setting('esm-home-page-gradient-card-paragraph', array(
			'default' => 'Die ESM ist eine Evangelisationsschule der Gemeinschaft Emmanuel e.V. die jungen Christen zwischen 18 und 30 Jahren eine katholisch theologische, philosophische und humanistische Ausbildung bietet. Es geht um eine persönliche Bezieh ung zu Gott und um ein Fundament im Glauben, das ins eigene Leben und zu den Menschen unserer Welt ausstrahlt. Ein geistliches und gemeinschaftliches Leben stehen dabei im Mittelpunkt. ',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'esm-frontpage-header-content',
			'settings' => 'esm-home-page-gradient-card-paragraph',
			'type' => 'textarea'
		)) );

		$wp_customize->selective_refresh->add_partial( 'esm-home-page-gradient-card-paragraph', array(
			'selector'            => '.home-intro p',
			'container_inclusive' => false,
			'render_callback'     => 'homePageGradientCardParagraph',
		) );

	$wp_customize->add_setting('esm-home-page-gradient-card-image', array(
			'default' => '',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'esm-home-page-gradient-card-image-control', array(
			'label' => 'Image',
			'section' => 'esm-frontpage-header-content',
			'settings' => 'esm-home-page-gradient-card-image',
			'width' => '2348',
			'height' => '1555'
		)) );

	$wp_customize->selective_refresh->add_partial( 'esm-home-page-gradient-card-image', array(
		'selector'            => '.home-intro h1',
		'container_inclusive' => false,
		'render_callback'     => 'homePageGradientCardImage',
	) );

	// Footer - details card
	$wp_customize->add_setting('esm-footer-details-card', array(
			'default' => '<p>
Gemeinschaft Emmanuel e.V.<br>
Emmanuel School of Mission<br>
&#075;&#111;&#108;&#098;&#101;&#114;&#103;&#115;&#116;&#114;&#046;&#032;&#052;
&#056;&#052;&#053;&#048;&#051;&#032;&#065;&#108;&#116;ö&#116;&#116;&#105;&#110;&#103;,&#032;&#068;&#101;&#117;&#116;&#115;&#099;&#104;&#108;&#097;&#110;&#100;
</p>
<p>
+&#052;&#057;&#032;&#056;&#054;&#055;&#049;&#032;&#053;&#048;&#048;&#051;&#055;&#045;&#048;<br>
<a href="mailto:&#105;&#110;&#102;&#111;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;">
&#105;&#110;&#102;&#111;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;</a>
</p>',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-footer-details-card-control', array(
			'label'			=> 'Paragraph',
			'section'		=> 'esm-footer-content',
			'settings'	=> 'esm-footer-details-card',
			'type'			=> 'textarea'
		)) );

		$wp_customize->selective_refresh->add_partial( 'esm-footer-details-card', array(
			'selector'						=> '.footer-content-wrap .footer-column:last-child',
			'container_inclusive'	=> false,
			'render_callback'			=> 'footerContactBlock',
		) );

	// Footer - under the logos text
	$wp_customize->add_setting('esm-footer-cooperation-details', array(
			'default' => 'in Kooperation mit der <br class="small-dsp-show">Lateran Universität Rom',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-footer-cooperation-details-control', array(
			'label'			=> 'Paragraph',
			'section'		=> 'esm-footer-content',
			'settings'	=> 'esm-footer-cooperation-details',
			'type'			=> 'textarea'
		)) );

		$wp_customize->selective_refresh->add_partial( 'esm-footer-cooperation-details', array(
			'selector'						=> '.footer-column .organiztions-wrap',
			'container_inclusive'	=> false,
			'render_callback'			=> 'footerCooperationBlock',
		) );

}

add_action( 'customize_register', 'esm_altoetting_customize_elements' );