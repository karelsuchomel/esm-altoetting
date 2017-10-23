<?php /* Template name: Profiles - this year */ ?>
<?php get_header();?>

<?php require_once('navigation/top-menu-bar.php');?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-profiles.css">

<div id="content" class="profiles-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="listing-header">
	<h1>
		<?php the_title(); ?>
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

<!-- List students -->
<div class="listing-container">
<h2>Studenten</h2>
<ul class="clear-both">
<?php 

	$args = array(
		'post_type' => 'profile',
		'posts_per_page' => '1000',
		'meta_query' => array(
			'profile-listing-position' => array(
				'key' => 'profile-listing-position',
			),		
			'profile-mission' => array(
				'key' => 'profile-mission',
				'value' => 'student',
			),	
		),

		'orderby' => array(
			'title' => 'ASC',
			'profile-listing-position' => 'DESC',
		),
	);
	$my_query = new WP_Query( $args );

	while ( $my_query->have_posts() ) : $my_query->the_post();

	$lspb_stored_data = get_post_meta( get_the_ID() );
	?>

	<li class="prifle-card-wrap">
		<!-- 4/3 aspect ration -->
		<?php if ( has_post_thumbnail() ) :
			$postID = get_post();
			$postSmallThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

			echo "<div class='profile-picture' style=\"background-image: url('" . $postSmallThumbURI . "');\"></div>";

		endif; ?>
		<div class="profile-text-wrap">
			<div class="center-verticaly">
			<h3>
				<?php if ( ! empty($lspb_stored_data['profile-personal-title']) ) echo esc_attr( $lspb_stored_data['profile-personal-title'][0] . " " ); ?><?php if ( ! empty($lspb_stored_data['profile-name']) ) echo esc_attr( $lspb_stored_data['profile-name'][0] ); ?>
			</h3>
			<span class="corp-position-holder">
				<?php if ( ! empty($lspb_stored_data['profile-description']) ) echo esc_attr( $lspb_stored_data['profile-description'][0] ); ?>
			</span>
			</div>
		</div>
	</li>

	<?php endwhile; ?>
</ul>
</div>

<!-- List team -->
<!-- List students -->
<div class="listing-container team">
<h2>Team</h2>
<ul class="clear-both">
<?php 
	$args = array(
		'post_type' => 'profile',
		'posts_per_page' => '1000',
		'meta_query' => array(
			'profile-listing-position' => array(
				'key' => 'profile-listing-position',
			),		
			'profile-mission' => array(
				'key' => 'profile-mission',
				'value' => 'team',
			),	
		),

		'orderby' => array(
			'profile-listing-position' => 'DESC',
			'title' => 'ASC',
		),
	);
	$my_query = new WP_Query( $args );

	while ( $my_query->have_posts() ) : $my_query->the_post();

	$lspb_stored_data = get_post_meta( get_the_ID() );
	?>

	<li class="prifle-card-wrap">
		<!-- 4/3 aspect ration -->
		<?php if ( has_post_thumbnail() ) :
			$postID = get_post();
			$postSmallThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'medium' );

			echo "<div class='profile-picture' style=\"background-image: url('" . $postSmallThumbURI . "');\"></div>";

		endif; ?>
		<div class="profile-text-wrap">
			<div class="center-verticaly">
			<h3>
				<?php if ( ! empty($lspb_stored_data['profile-personal-title']) ) echo esc_attr( $lspb_stored_data['profile-personal-title'][0] . " " ); ?><?php if ( ! empty($lspb_stored_data['profile-name']) ) echo esc_attr( $lspb_stored_data['profile-name'][0] ); ?>
			</h3>
			<span class="corp-position-holder">
				<?php if ( ! empty($lspb_stored_data['profile-description']) ) echo esc_attr( $lspb_stored_data['profile-description'][0] ); ?>
			</span>
			</div>
		</div>
	</li>

	<?php endwhile; ?>
</ul>
</div>

<?php get_footer();?>