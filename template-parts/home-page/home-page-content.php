<div id="mobile-menu-zoom-el" class="gradient-card home-intro" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('esm-home-page-gradient-card-image')); ?>');">
	<div class="card-content">
	<h1>
		<?php echo get_theme_mod('esm-home-page-gradient-card-headline'); ?>
	</h1>
	<p>
		<?php echo get_theme_mod('esm-home-page-gradient-card-paragraph');?>
	</p>
	</div>
</div>

<div id="listing-posts" class="clear-both">
<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => '3',
	'orderby' => 'date',
	'order' => 'DESC',
);
$my_query = new WP_Query( $args );

if ( $my_query->have_posts() ) : while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

	<div class="post-item">
		<a class="header-image-wrap" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<div class="post-header"
		<?php if ( has_post_thumbnail() ) :
			$postID = get_post();
			$postThumbURI = get_the_post_thumbnail_url(); 
		?>

			style="background-image: url(<?php echo $postThumbURI ?>);"

		<?php endif; ?>
		>
		</div>
		</a>

		<h3>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
			</a>
		</h3>

		<div class="snippet-wrap">
			<?php
			$loaded_content = strip_shortcodes( get_the_content('') );
			$stripped_tags = strip_tags( $loaded_content );
			echo substr( $stripped_tags, 0, 95 ); 
			// add rest of the word
			$rest_of_the_word = preg_split('/\s+/', substr( $stripped_tags, 95, 200 ));
			echo $rest_of_the_word[0] . "...";
			?>
		</div>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>
	<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
<a class="great-button" href="<?php bloginfo('url'); ?>/aktuelles">mehr</a>
</div>

<div class="four-boxes">
	<div class="box cross">
		<div class="box-content">
			<h2><?php echo get_theme_mod('esm-home-page-4boxes-1stbox-headline');?></h2>
			<p>
				<?php echo get_theme_mod('esm-home-page-4boxes-1stbox-paragraph');?>
			</p>
		</div>
	</div>
	<div class="box ship">
		<div class="box-content">
			<h2><?php echo get_theme_mod('esm-home-page-4boxes-2ndbox-headline');?></h2>
			<p>
				<?php echo get_theme_mod('esm-home-page-4boxes-2ndbox-paragraph');?>
			</p>
		</div>
	</div>
	<div class="box book">
		<h2><?php echo get_theme_mod('esm-home-page-4boxes-3rdbox-headline');?></h2>
		<p>
			<?php echo get_theme_mod('esm-home-page-4boxes-3rdbox-paragraph');?>
		</p>
	</div>
	<div class="box church">
		<div class="box-content">
			<h2><?php echo get_theme_mod('esm-home-page-4boxes-4thbox-headline');?></h2>
			<p>
				<?php echo get_theme_mod('esm-home-page-4boxes-4thbox-paragraph');?>
			</p>
		</div>
	</div>
</div>

<div class="citation-card-container">
	<div class="citation-marker up"></div>
	<div class="citation-text">
		<?php echo get_theme_mod('esm-home-page-quotation-paragraph'); ?>
	</div>
	<div class="citation-marker down"></div>
</div>

<div class="two-boxes">
	<div class="box interessiere">
		<h2><?php echo get_theme_mod('esm-home-page-2boxes-1stbox-headline'); ?></h2>
		<p><?php echo get_theme_mod('esm-home-page-2boxes-1stbox-paragraph'); ?></p>
		<a href="mailto:<?php $tmpEm = get_theme_mod('esm-home-page-2boxes-1stbox-button'); echo $tmpEm; ?>" class="two-boxes-button"><?php echo $tmpEm; ?></a>
	</div>
	<div class="box blue">
		<h2>Ich möchte die ESM unterstützen</h2>
		<p>Herzlichen Dank – wir freuen uns über jede Hilfe, ob klein oder groß. Unsere Arbeit finanziert sich fast ausschließlich von Spenden und Patenschaften. Wir sind dankbar für jegliche Unterstützung.</p>
		<a href="mailto:&#100;&#105;&#114;&#101;&#107;&#116;&#111;&#114;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;" class="two-boxes-button">&#100;&#105;&#114;&#101;&#107;&#116;&#111;&#114;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;</a>
	</div>
</div>