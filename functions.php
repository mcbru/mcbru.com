<?php

/****************************************
Theme Setup
*****************************************/

define(URL, get_site_url());
define(THEME, get_bloginfo('template_directory'));
define(TIM, THEME.'/lib/timthumb.php?src=');
define(BL_LIST, '&amp;w=488&amp;h=232&amp;zco=3');
define(BL_PORT, '&amp;w=488&amp;h=540&amp;zco=3');
define(BL_FULL, '&amp;w=1000&amp;h=540&amp;zco=3');

require_once( get_template_directory() . '/lib/init.php' );
require_once( get_template_directory() . '/lib/custom-post-types.php' );
require_once( get_template_directory() . '/lib/theme-helpers.php' );
require_once( get_template_directory() . '/lib/theme-functions.php' );
require_once( get_template_directory() . '/lib/theme-comments.php' );


/****************************************
Require Plugins
*****************************************/

require_once( get_template_directory() . '/lib/class-tgm-plugin-activation.php' );
require_once( get_template_directory() . '/lib/theme-require-plugins.php' );

add_action( 'tgmpa_register', 'mb_register_required_plugins' );


/****************************************
Misc Theme Functions
*****************************************/

/**
 * Define custom post type capabilities for use with Members
 */
function mb_add_post_type_caps() {
	// mb_add_capabilities( 'portfolio' );
}

/**
 * Filter Yoast SEO Metabox Priority
 */
add_filter( 'wpseo_metabox_prio', 'mb_filter_yoast_seo_metabox' );
function mb_filter_yoast_seo_metabox() {
	return 'low';
}


// Add specific CSS class by filter
add_filter('body_class','my_class_names');
function my_class_names($classes) {
	global $post;
	// add 'class-name' to the $classes array
	$classes[] = 'page-'.$post->post_name;
	// return the $classes array
	return $classes;
}
