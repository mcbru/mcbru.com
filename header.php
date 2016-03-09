<?php
  global $post;
  $ee         = $post->ID;
  if(!is_page('home') && !is_page('about') && !is_page('services')) :
    $strip_head     = get_field('hed_img',$ee);
    if(!$strip_head) :
      $strip_head   = get_field('gh_img','Options');
    endif;
    $strip = wp_get_attachment_image_src($strip_head, 'full-bleed-strip');
  else :
    $hero_img     = get_field('hero_image',$ee);
    // echo var_dump($hero_img);
    //global $hero_img;
    // $strip = wp_get_attachment_image_src($hero_img, 'full-bleed');
    $strip = wp_get_attachment_image_src($hero_img, 'full');
    $hero_cont    = get_field('hero_content',$ee);
    $hs_cta_button = get_field('hubspot_cta_button');
    //$sub_left     = get_field('sub_hero_left',$ee);
    //$sub_right    = get_field('sub_hero_right',$ee);
  endif;
    $bee_gee      = $strip[0];
    // echo var_dump($bee_gee);
?>

<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]--> <!-- 


   _|_|_|_|                  _|_|_|
   _|             _|       _|
   _|_|_|       _|_|_|     _|
   _|             _|       _|
   _|_|_|_|                  _|_|_|

   designed by Christine Ellsworth
       developed by Dan Cruzat
              eencee.me



</. #pdxwebmafia /. #webuildbadasswarships /.> --><head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <?php echo '<script> var $loca = "'.URL.'"; </script>'; ?>
  <?php wp_head(); ?>
  <?php if(is_page('connect')) : ?>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU7Q3reQdSCnZMvlhzmFI-6Nuqz3WFd5M">
    </script>
    <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(45.4843698,-122.6759628);
        var mapOptions = {
          zoom: 16,
          center: myLatlng,
          mapTypeControl: true,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
          },
          zoomControl: true,
          zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
          }
        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'McClenahan Bruer'
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
  <!--[if lt IE 8]>
      <p class="whatbrowser">You are using an <strong>outdated</strong> browser. Please <a href="http://whatbrowser.org">upgrade your browser</a> or <a href="http://whatbrowser.org/">learn more</a> about your browsing options.</p>
  <![endif]-->


  <?php
    if(is_page('about')) : $head_ico = 'fa-info-circle'; endif;
    if(is_page('connect')) : $head_ico = 'fa-link'; endif;
    if(is_page('services')) : $head_ico = 'fa-gear'; endif;
    if(is_post_type_archive('work')||is_post_type_archive('case-studies')||is_page('cs-proof')||is_page('clients')) : $head_ico = 'fa-folder'; endif;
  ?>
  <div class="full-wrap">

    <header class="header clearfix"
      <?php if($bee_gee && is_page('home')) : ?>
        style="
          background: #000 url(<?php echo $bee_gee; ?>) 50% 0% no-repeat;
          min-height:550px;
        "
      <?php elseif($bee_gee && is_page('services')) : ?>
        style="
          background: #000 url(<?php echo $bee_gee; ?>) 50% 150px repeat-x;
          min-height:550px;
        "
      <?php elseif($bee_gee) : ?>
        style="
          background: #000 url(<?php echo $bee_gee; ?>) 50% 150px no-repeat;
          min-height:550px;
        "
      <?php endif; ?>
    >

      <?php if(!is_page('home')) : ?><?php endif; //<div class="screne"></div><img src="< ? php ? >" /> ?>

      <div class="container">
        <a class="logo" href="<?php echo home_url( '/' ); ?>" title="Return to the homepage"><img src="<?php echo THEME; ?>/assets/images/mcbru-logo-horizontal-warm-gray-transparency.png" alt="McClenahan Bruer logo" /></a>
        <a class="toggle" href="#"><i class="fa fa-bars"></i></a>
        <nav class="desktop">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
        <nav class="mobile">
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>
      </div>

      <?php if(is_page('home') || is_page('about') || is_page('services')) : ?>
        <div class="hero">
          <div class="container">
            <div class="content">
              <?php echo apply_filters('the_content', $hero_cont); ?>

              <?php if(is_page('home')) :
                echo $hs_cta_button;
              endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </header>

    <div class="container">

      <?php if((  is_page()  &&  !is_page('home')  &&  !is_page('services')  &&  !is_page('about')  && !is_page('blog-single-proof'))||is_archive()) : ?>
        <div class="row">
          <div class="twenty-four columns">
            <h1 class="head-it clearfix"><?php
              if(is_page()) :
                echo $post->post_title;
              elseif(is_post_type_archive('work')||is_post_type_archive('case-studies')) :
                echo 'Work';
              endif; ?><i class="fa <?php echo $head_ico; ?>"></i><!--  --></h1>
          </div>
        </div>
      <?php endif; ?>
      <?php $me = get_post_type(); ?>
