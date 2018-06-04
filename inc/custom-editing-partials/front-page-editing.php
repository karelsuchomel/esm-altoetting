<?php
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

// Hero image
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
	'selector'            => '#mobile-menu-zoom-el.gradient-card.home-intro',
	'container_inclusive' => false,
	'render_callback'     => 'homePageGradientCardImage',
) );

// Four boxes - box 1 - headline
$wp_customize->add_setting('esm-home-page-4boxes-1stbox-headline', array(
		'default' => 'Gebet',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-1stbox-headline-control', array(
		'label' => '4boxes-Cross-Headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-1stbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-1stbox-headline', array(
	'selector'            => '.four-boxes .box.cross .box-content h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes1stboxHeadline',
) );

// Four boxes - box 1 - paragraph
$wp_customize->add_setting('esm-home-page-4boxes-1stbox-paragraph', array(
		'default' => 'Eine persönliche Beziehung zu Gott entdecken und vertiefen, durch Gebet, Hl. Messe, Stille, Bibellesen, Exerzitien und mehr.',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-1stbox-paragraph-control', array(
		'label' => '4boxes-Cross-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-1stbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-1stbox-paragraph', array(
	'selector'            => '.four-boxes .box.cross .box-content p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes1stboxParagraph',
) );

// Four boxes - box 2 - headline
$wp_customize->add_setting('esm-home-page-4boxes-2ndbox-headline', array(
		'default' => 'Gemeinschaft',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-2ndbox-headline-control', array(
		'label' => '4boxes-Boat-Headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-2ndbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-2ndbox-headline', array(
	'selector'            => '.four-boxes .box.ship .box-content h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes2ndboxHeadline',
) );

// Four boxes - box 2 - paragraph
$wp_customize->add_setting('esm-home-page-4boxes-2ndbox-paragraph', array(
		'default' => 'Junge Erwachsene aus vielen verschiedenen Nationen leben gemeinsam in der Josefsburg – eine Schule der Nächstenliebe.',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-2ndbox-paragraph-control', array(
		'label' => '4boxes-Boat-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-2ndbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-2ndbox-paragraph', array(
	'selector'            => '.four-boxes .box.ship .box-content p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes2ndboxParagraph',
) );

// Four boxes - box 3 - headline
$wp_customize->add_setting('esm-home-page-4boxes-3rdbox-headline', array(
		'default' => 'Unterricht',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-3rdbox-headline-control', array(
		'label' => '4boxes-Book-Headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-3rdbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-3rdbox-headline', array(
	'selector'            => '.four-boxes .box.book h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes3rdboxHeadline',
) );

// Four boxes - box 3 - paragraph
$wp_customize->add_setting('esm-home-page-4boxes-3rdbox-paragraph', array(
		'default' => 'Durch eine menschliche, theologische und philosophische Ausbildung, sich selbst und den Glauben besser kennenlernen.',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-3rdbox-paragraph-control', array(
		'label' => '4boxes-Book-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-3rdbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-3rdbox-paragraph', array(
	'selector'            => '.four-boxes .box.book p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes3rdboxParagraph',
) );

// Four boxes - box 4 - headline
$wp_customize->add_setting('esm-home-page-4boxes-4thbox-headline', array(
		'default' => 'Mission',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-4thbox-headline-control', array(
		'label' => '4boxes-Church-Headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-4thbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-4thbox-headline', array(
	'selector'            => '.four-boxes .box.church .box-content h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes4thboxHeadline',
) );

// Four boxes - box 4 - paragraph
$wp_customize->add_setting('esm-home-page-4boxes-4thbox-paragraph', array(
		'default' => 'Die Liebe und Barmherzigkeit Gottes für sich selbst entdecken und lernen, sie in Freude an andere Menschen weiterzugeben.',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-4boxes-4thbox-paragraph-control', array(
		'label' => '4boxes-Church-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-4boxes-4thbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-4boxes-4thbox-paragraph', array(
	'selector'            => '.four-boxes .box.church .box-content p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage4boxes4thboxParagraph',
) );

// Quotation box - paragraph
$wp_customize->add_setting('esm-home-page-quotation-paragraph', array(
		'default' => '
		<span class="text">
			Du sollst den Herrn, deinen Gott, lieben mit ganzem Herzen und ganzeer <br class="hide-on-small-screen">Seele, mit all deiner Kraft und all deinen Gedanken. Und deinen <br class="hide-on-small-screen">Nächsten sollst du lieben wie dich selbst.
		</span>
		<span class="author">
			Lk 10,27
		</span>
	',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-quotation-paragraph-control', array(
		'label' => 'Quotation paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-quotation-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-quotation-paragraph', array(
	'selector'            => '.citation-card-container .citation-text',
	'container_inclusive' => false,
	'render_callback'     => 'frontPageQuotationParagraph',
) );

// Two boxes - box 1 - headline
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-headline', array(
		'default' => 'Ich interessiere mich für die ESM',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-headline-control', array(
		'label' => '2boxes headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-headline', array(
	'selector'            => '.two-boxes .box.interessiere h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxHeadline',
) );

// Two boxes - box 1 - paragraph
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-paragraph', array(
		'default' => 'Super – wir wollen dich kennenlernen! Schreib uns ein E-Mail und wir vereinbaren einen Termin um miteinander zu sprechen und deine Fragen zu beantworten. Nur Mut, wir freuen uns auf dich!',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-paragraph-control', array(
		'label' => '4boxes-Church-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-paragraph', array(
	'selector'            => '.two-boxes .box.interessiere p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxParagraph',
) );

// Two boxes - box 1 - e-mail address
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-button', array(
		'default' => '&#098;&#101;&#119;&#101;&#114;&#098;&#117;&#110;&#103;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-button-control', array(
		'label' => '2boxes 1stbox button',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-button',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-button', array(
	'selector'            => '.two-boxes .box.interessiere a',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxButton',
) );

// Two boxes - box 2 - headline
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-headline', array(
		'default' => 'Ich interessiere mich für die ESM',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-headline-control', array(
		'label' => '2boxes headline',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-headline',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-headline', array(
	'selector'            => '.two-boxes .box.interessiere h2',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxHeadline',
) );

// Two boxes - box 2 - paragraph
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-paragraph', array(
		'default' => 'Super – wir wollen dich kennenlernen! Schreib uns ein E-Mail und wir vereinbaren einen Termin um miteinander zu sprechen und deine Fragen zu beantworten. Nur Mut, wir freuen uns auf dich!',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-paragraph-control', array(
		'label' => '4boxes-Church-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-paragraph',
		'type' => 'textarea'
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-paragraph', array(
	'selector'            => '.two-boxes .box.interessiere p',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxParagraph',
) );

// Two boxes - box 2 - e-mail address
$wp_customize->add_setting('esm-home-page-2boxes-1stbox-button', array(
		'default' => '&#098;&#101;&#119;&#101;&#114;&#098;&#117;&#110;&#103;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;',
		'transport' => 'postMessage'
	));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-2boxes-1stbox-button-control', array(
		'label' => '4boxes-Church-Paragraph',
		'section' => 'esm-frontpage-header-content',
		'settings' => 'esm-home-page-2boxes-1stbox-button',
	)) );

$wp_customize->selective_refresh->add_partial( 'esm-home-page-2boxes-1stbox-button', array(
	'selector'            => '.two-boxes .box.interessiere a',
	'container_inclusive' => false,
	'render_callback'     => 'frontPage2boxes1stboxButton',
) );