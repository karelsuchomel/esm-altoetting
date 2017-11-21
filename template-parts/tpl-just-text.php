<?php /* Template name: Just text */ ?>
<?php get_header();?>

<?php require_once('navigation/top-menu-bar.php');?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-just-text.css">

<div id="content">

<div id="post-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

<?php get_footer();?>
