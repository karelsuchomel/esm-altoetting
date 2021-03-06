<div id="post-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( has_post_thumbnail() ) :
		$postID = get_post();
		$postLargeThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'large' );
		$postSmallThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
	?>

	<style type="text/css">
		#post-container .post-header {
			background-image: url(<?php echo $postLargeThumbURI ?>);
			@media sreen and (max-width: 640px) {
				background-image: url(<?php echo $postSmallThumbURI ?>);
			}
		}
	</style>

	<?php endif; ?>

	<div class="post-header" id="mobile-menu-zoom-el"></div>

	<div class="content-container clear-both">
	<h1>
	<style>
	.content-container h1 a {
	<?php
	// custom font style depending on character count
	$titleText = get_the_title();
	if ( strlen($titleText) < 16 )	{
		echo "font-size: 44px;line-height: 55px;";
	} elseif ( strlen($titleText) < 46 ) {
		echo "font-size: 34px;line-height: 40px;";
	} else {
		echo "font-size: 22px;line-height: 26px;";
	}
	?>
	}
	</style>

		<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		<?php the_title(); ?>
		</a>
	</h1>
	<div class="content-text">
		<?php
		the_content('');
		?>
	</div>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>
	<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
</div>
