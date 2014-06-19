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
	<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>

	<?php echo '<script> var $loca = "'.URL.'"; </script>'; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
<div class="full-wrap">
	<div class="container">

		<header class="header clearfix">
			<a class="logo" href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php /*<div class="description">bloginfo( 'description' );</div>*/ ?>
				<a class="toggle" href="#"><i class="fa fa-bars"></i></a>
			<nav class="desktop">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			<nav class="mobile">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</header>

	<?php $me = get_post_type(); ?>

	<?php //print_r($me); 
		if(is_page('about')) : $head_ico = 'fa-info-circle'; endif;
		if(is_page('connect')) : $head_ico = 'fa-link'; endif;
		if(is_page('services')) : $head_ico = 'fa-gear'; endif;
		if(is_post_type_archive('work')||is_post_type_archive('case-studies')||is_page('cs-proof')) : $head_ico = 'fa-folder'; endif;
		?>

	<?php if((  is_page()  &&  !is_front_page()  && !is_page('blog-single-proof'))||is_archive()) : ?>
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