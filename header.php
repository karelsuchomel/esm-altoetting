<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name');?></title>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The Open Graph Protocol -->
    <?php
    global $wp;
    $current_url = home_url(add_query_arg(array(),$wp->request));
    ?>
    <meta property="og:url" content="<?php echo $current_url; ?>" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <?php 
    // Create snippet from content
    $thisPost = get_post(); 
    $thisPostscontent = apply_filters('the_content', $thisPost->post_content);

    $trimmed = wp_trim_words( $thisPostscontent , $num_words = 55, $more = "..." );
    ?>
    <meta property="og:description" content="<?php echo $trimmed; ?>" />
    <meta property="og:type" content="article" />
    <?php
    // Find suiting image
    $featuredImageID = get_post_meta( $thisPost->ID, "_thumbnail_id", true );
    if ( $featuredImageID !== "" ) {
      $attachement = get_post( $featuredImageID );
      $attachementURI = $attachement->guid;
    }
    
    //$featuredImageURL
    ?>
    <meta property="og:image" content="<?php echo $attachementURI; ?>" />

    <!-- Google Analytics -->
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src=“https://www.googletagmanager.com/gtag/js?id=UA-107143493-1“></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments)};
      gtag(‘js’, new Date());

     gtag(‘config’, ‘UA-107143493-1’);
    </script>

    <!-- Links-->
    <!-- Fonts-->
    <!-- font-family: Montserrat - 400, 600 -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&amp;subset=latin-ext" rel="stylesheet"> 
    <!-- JS  -->
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
