<?php /* Template name: Aktuell */ ?>
<?php get_header();?>

<?php require_once('navigation/top-menu-bar.php');?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-aktuell.css">

<div id="content" class="aktuell-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="listing-header">
	<h1>
		<?php the_title(); ?>
	</h1>
</div>
<?php endwhile; ?>

<?php else : ?>
<p><?php _e( 'Could\'t load page\'s title.' ); ?></p>
<?php endif; ?>

<!-- List posts -->
<div id="listing-posts" class="clear-both">
<?php 
$args = array(
	'post_type' => 'post',
	'posts_per_page' => '20',
	'orderby' => 'date',
	'order' => 'DESC',
);
$my_query = new WP_Query( $args );

if ( $my_query->have_posts() ):
while ( $my_query->have_posts() ) : $my_query->the_post();
?>
	<div class="post-item">
		<a class="header-image-wrap" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
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
<?php endif; ?>
</div>

<?php get_footer();?>