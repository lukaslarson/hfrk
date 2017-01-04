<html>
<head>
<title>Tutorial theme</title>
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700|Philosopher:200,400,600|Raleway:200,400,600|Titillium+Web:200,400,600&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
<div id="header">
<?php hfrk_custom_logo(0); ?>
<div id="header-text">
<?php echo get_bloginfo( 'name' ); ?>
&nbsp;
<?php 
//echo get_bloginfo( 'description' ); 
?>
<span id="nav-menu">
<?php 
    wp_nav_menu(array(
        'theme_location' => 'navigation-menu', // menu slug from step 1
        'container' => false, // 'div' container will not be added
        'menu_class' => 'nav', // <ul class="nav"> 
        'fallback_cb' => 'default_header_nav', // name of default function from step 2
    ));
?>
</span>
</div>
<div id="header-lower">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</div>


</div>
