<?php
// Add Post Thumbnail
add_theme_support( 'post-thumbnails' );

// Add Css Style
function myblog_theme_styles() {
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'myblog_theme_styles');


//Register Menu
add_theme_support( 'menus' );

function register_theme_menu(){
	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}

add_action('init', 'register_theme_menu');

//Delete Menu li's id
function theme_optimize_menu_id()
{
    return '';
}
add_filter('nav_menu_item_id', 'theme_optimize_menu_id');

//Delete Menu li's Class
function theme_optimize_menu_class($classes, $item)
{
    return array('nav__item');
}
add_filter('nav_menu_css_class', 'theme_optimize_menu_class', 10, 2);

function wpt_excerpt_length ($length) {
	return 16;
}
add_filter('excerpt_length', 'wpt_excerpt_length', 999);

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
