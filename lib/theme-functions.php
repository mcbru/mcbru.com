<?php

/****************************************
Backend Functions
*****************************************/

/**
 * Customize Contact Methods
 * @since 1.0.0
 *
 * @author Bill Erickson
 * @link http://sillybean.net/2010/01/creating-a-user-directory-part-1-changing-user-contact-fields/
 *
 * @param array $contactmethods
 * @return array
 */
function mb_contactmethods( $contactmethods ) {
  unset( $contactmethods['aim'] );
  unset( $contactmethods['yim'] );
  unset( $contactmethods['jabber'] );

  return $contactmethods;
}

/**
 * Register Widget Areas
 */
function mb_widgets_init() {
/*  // Main Sidebar
  register_sidebar(array(
    'name'          => __( 'Main Sidebar', 'mb' ),
    'id'            => 'main-sidebar',
    'description'   => __( 'Widgets for Main Sidebar.', 'mb' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));

  // Footer
  register_sidebar(array(
    'name'          => __( 'Footer', 'mb' ),
    'id'            => 'footer-widgets',
    'description'   => __( 'Widgets for Footer.', 'mb' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ));*/
}
add_filter( 'sidebars_widgets', 'disable_all_widgets' );

function disable_all_widgets( $sidebars_widgets ) {

  if ( is_home() )
    $sidebars_widgets = array( false );

  return $sidebars_widgets;
}

/**
 * Don't Update Theme
 * @since 1.0.0
 *
 * If there is a theme in the repo with the same name,
 * this prevents WP from prompting an update.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function mb_dont_update_theme( $r, $url ) {
  if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
    return $r; // Not a theme update request. Bail immediately.
  $themes = unserialize( $r['body']['themes'] );
  unset( $themes[ get_option( 'template' ) ] );
  unset( $themes[ get_option( 'stylesheet' ) ] );
  $r['body']['themes'] = serialize( $themes );
  return $r;
}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order($menu_ord) {
  if (!$menu_ord) return true;
  return array(
    // 'index.php', // Dashboard
    // 'separator1', // First separator
    // 'edit.php?post_type=page', // Pages
    // 'edit.php', // Posts
    // 'upload.php', // Media
    // 'gf_edit_forms', // Gravity Forms
    // 'genesis', // Genesis
    // 'edit-comments.php', // Comments
    // 'separator2', // Second separator
    // 'themes.php', // Appearance
    // 'plugins.php', // Plugins
    // 'users.php', // Users
    // 'tools.php', // Tools
    // 'options-general.php', // Settings
    // 'separator-last', // Last separator
  );
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
  // remove_menu_page('link-manager.php');
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );
  if ($image_set !== 'none') {
    update_option('image_default_link_type', 'none');
  }
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink($args) {
  $args['wordpress_adv_hidden'] = false;
  return $args;
}

/****************************************
Frontend
*****************************************/

/**
 * Enqueue scripts
 */
function mb_scripts() {
  // CSS first
  wp_register_style('mb_style', get_stylesheet_directory_uri().'/style.css', null, '1.0', 'all' );
  wp_enqueue_style( 'mb_style' );
  // JavaScript
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
  if ( !is_admin() ) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js', array('jquery') );
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, NULL );

    wp_enqueue_script('twitter', '//platform.twitter.com/widgets.js');
    //wp_enqueue_script('gumby', get_template_directory_uri() . '/assets/js/vendor/gumby.min.js', false, NULL );


    wp_enqueue_script('customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
    wp_enqueue_script('customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );
  }
}

/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version($src){
  $parts = explode('?', $src);
  return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"',$offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end-$offset);
  }
  return $link;
}


/*** Thanks Matt I'll take it from here ***/


/**
 * Single shortcode in custom field
 */
function field_code($str) {
  $str1 = explode('[', $str);
  $str2 = explode(']', $str);
  preg_match_all("^\[(.*?)\]^",$str,$fields, PREG_PATTERN_ORDER);   
  if($fields[0]) {    
    $str = $str1[0] . do_shortcode($fields[0][0]) . $str2[1]; 
  }
  return $str;
}


/**
 * Phone cleaner
 */
function phone_lnk($phone, $icon=false) {
  $call = preg_replace('/(\W*)/', '', $phone);
  $str = '<a href="tel:' . $call . '">'.$phone.'</a>';
  return $str;
}


/**
 * Superfresh weblink cleaner
 */
function web_lnk($url,$label,$class) {
  //print_r($label);
  if(!$label) {
    $label = str_replace(array('http://','https://','www.'),'',$url);
  }
  if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
      $url = "http://" . $url;
  }
  $str = '<a href="'.$url.'" target="_blank"';
  if($class) :
    $str .= ' class="'.$class.'"';
    endif;
  $str .= '>'.$label.'</a>';
  //print_r($str);
  return $str;
}


/**
 * URL in shortcode
 */
function url_shortcode() {
  return RL;
}
add_shortcode('url','url_shortcode');


/**
 * Word trimmer
 */
function word_limit($string, $word_limit)
{
  $words = explode(" ",$string);
  return implode(" ",array_splice($words,0,$word_limit));
}


/**
 * Only limit posts on the main blog page
 */
// function no_post_limit( $query ) {
//     if (!is_admin() && !is_home() && $query->is_main_query() ) {
//         $query->set( 'posts_per_page', '-1' );
//     }
// }
// add_action( 'pre_get_posts', 'no_post_limit' );


/**
 * Most of our youtube embeds are gonna be short, let's get rid
 * of those unsightly player controls
 */
function remove_youtube_controls($code){
  if(strpos($code, 'youtu.be') !== false || strpos($code, 'youtube.com') !== false){
    $return = preg_replace("@src=(['\"])?([^'\">s]*)@", "src=$1$2&autoplay=0&showinfo=0&controls=0&rel=0", $code);
    return $return;
  }
  return $code;
}
add_filter('embed_handler_html', 'remove_youtube_controls');
add_filter('embed_oembed_html', 'remove_youtube_controls');


/**
 * Add Twitter tracking codes
 */
add_action('wp_footer', 'add_twitter_tracking_code');
function add_twitter_tracking_code() {
  if (is_page('connect')) { ?>
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">
    twttr.conversion.trackPid('l5gls', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5gls&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5gls&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" /></noscript>
  <?php } elseif (is_page('services')) { ?>
    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">
    twttr.conversion.trackPid('l5glv', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5glv&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
    <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5glv&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" /></noscript>
  <?php }
}

/**
 * Add HubSpot tracking code
 */
add_action('wp_footer', 'add_hubspot_tracking_code');
function add_hubspot_tracking_code() { ?>
  <!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
      (function(d,s,i,r) {
        if (d.getElementById(i)){return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
        n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/448074.js';
        e.parentNode.insertBefore(n, e);
      })(document,"script","hs-analytics",300000);
    </script>
  <!-- End of Async HubSpot Analytics Code -->
<?php } ?>
