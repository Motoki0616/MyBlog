<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right');?> ど田舎のWebDeveloper</title>
    <?php wp_head();?>
</head>
<body>
<div class="wrapper">
	<header>
        <h1 class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="ど田舎のWebDeveloper in Vancouver"></a></h1>
		<nav class="navbar">
            <?php $defaults = array(
              	'theme_location'  => 'primary-menu',
                'container'       => '',
              	'menu'            => '',
              	'menu_class'      => 'nav',
              	'menu_id'         => '',
              	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
              );
              wp_nav_menu( $defaults ); ?>
		</nav>
	</header>
