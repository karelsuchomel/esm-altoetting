<div id="mobile-menu-zoom-el" class="gradient-card home-intro" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/images/Home_Intro.jpg');">
	<div class="card-content">
	<h1>
		<?php echo get_theme_mod('esm-home-page-gradient-card-headline'); ?>
	</h1>
	<p>
		<?php echo get_theme_mod('esm-home-page-gradient-card-paragraph');?>
	</p>
	</div>
</div>

<div class="four-boxes">
	<div class="box ship">
		<div class="box-content">
			<h2>Gemeinschaft</h2>
			<p>
				Junge Erwachsene aus vielen verschiedenen Nationen leben gemeinsam in der Josefsburg – eine Schule der Nächstenliebe.
			</p>
		</div>
	</div>
	<div class="box book">
		<h2>Unterricht</h2>
		<p>
			Durch eine menschliche, theologische und philosophische Ausbildung, sich selbst und den Glauben besser kennenlernen.
		</p>
	</div>
	<div class="box church">
		<div class="box-content">
			<h2>Mission</h2>
			<p>
				Die Liebe und Barmherzigkeit Gottes für sich selbst entdecken und lernen, sie in Freude an andere Menschen weiterzugeben.
			</p>
		</div>
	</div>
	<div class="box cross">
		<div class="box-content">
			<h2>Gebet</h2>
			<p>
				Eine persönliche Beziehung zu Gott entdecken und vertiefen, durch Gebet, Hl. Messe, Stille, Bibellesen, Exerzitien und mehr.
			</p>
		</div>
	</div>
</div>

<div id="listing-posts" class="clear-both">
	<h2>Aktuell</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post-item">
		<div class="post-header"
		<?php if ( has_post_thumbnail() ) : ?>
			<?php
				$postID = get_post();
				$postThumbURI = get_the_post_thumbnail_url(); 
			?>

			style="background-image: url(<?php echo $postThumbURI ?>);"

		<?php endif; ?>
		>
		</div>

		<h3>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
			</a>
		</h3>

		<div class="snippet-wrap">
			<span><?php the_time('j/F/Y'); ?></span>
			<?php
			$loaded_content = strip_shortcodes( get_the_content('') );
			echo wp_trim_words( $loaded_content, 25, '...' ); 
			?>
		</div>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>
	<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
</div>
<button class="great-button">mehr</button>

<div class="two-boxes">
	<div class="box interessiere">
		<h2>Ich interessiere mich für die ESM</h2>
		<p>Super – wir wollen dich kennenlernen! Schreib uns ein E-Mail und wir vereinbaren einen Termin um miteinander zu sprechen und deine Fragen zu beantworten. Nur Mut, wir freuen uns auf dich!</p>
		<a href="mailto:&#098;&#101;&#119;&#101;&#114;&#098;&#117;&#110;&#103;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;" class="two-boxes-button">&#098;&#101;&#119;&#101;&#114;&#098;&#117;&#110;&#103;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;</a>
	</div>
	<div class="box blue">
		<h2>Ich möchte die ESM unterstützen</h2>
		<p>Herzlichen Dank – wir freuen uns über jede Hilfe, ob klein oder groß. Unsere Arbeit finanziert sich fast ausschließlich von Spenden und Patenschaften. Wir sind dankbar für jegliche Unterstützung.</p>
		<a href="mailto:&#100;&#105;&#114;&#101;&#107;&#116;&#111;&#114;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;" class="two-boxes-button">&#100;&#105;&#114;&#101;&#107;&#116;&#111;&#114;&#064;&#101;&#115;&#109;&#045;&#097;&#108;&#116;&#111;&#101;&#116;&#116;&#105;&#110;&#103;&#046;&#100;&#101;</a>
	</div>
</div>