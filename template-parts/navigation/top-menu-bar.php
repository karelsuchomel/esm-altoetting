<div id="top-menu-bar">
	<div class="menu-content clear-both">
	<?php
	echo "<a id='home-page-link' href='" . home_url( '/' ) . "'><img src='" . get_bloginfo('template_url') . "/assets/images/logo-thinner.svg'></a><input type='checkbox' id='menu-toggle'>";
	$args = array('menu' => 'menu-top-bar', 'container_id' => 'menu-top-bar-container');
	wp_nav_menu( $args );
	?>
	<label for="menu-toggle" id="show-mobile-menu">
		<div class="icon">
			<div class="line first"></div>
			<div class="line second"></div>
			<div class="line third"></div>
		</div>
	</label>
	</div>
</div>
<div id="dimm-background"></div>