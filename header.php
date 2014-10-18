<?php 
	global $post;
	$ee 				= $post->ID;	
	if(!is_page('home')) :
		$strip_head 		= get_field('hed_img',$ee);
		if(!$strip_head) :
			$strip_head 	= get_field('gh_img','Options');
			endif;
		$strip = wp_get_attachment_image_src($strip_head, 'full-bleed-strip');
	else :
		$hero_img 		= get_field('hero_image',$ee);
		//global $hero_img;
		$strip = wp_get_attachment_image_src($hero_img, 'full-bleed');
		$hero_cont 		= get_field('hero_content',$ee);
		$hero_link 		= get_field('hero_link',$ee);
		$hero_link_lbl 	= get_field('hero_link_label',$ee);
		//$sub_left 		= get_field('sub_hero_left',$ee);
		//$sub_right 		= get_field('sub_hero_right',$ee);
		endif;
		$bee_gee 			= $strip[0];
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
	<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>

	<?php echo '<script> var $loca = "'.URL.'"; </script>'; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
	    <p class="whatbrowser">You are using an <strong>outdated</strong> browser. Please <a href="http://whatbrowser.org">upgrade your browser</a> or <a href="http://whatbrowser.org/">learn more</a> about your browsing options.</p>
	<![endif]-->

	<?php// echo $strip[0]; ?>
	<?php //print_r($me); 
		if(is_page('about')) : $head_ico = 'fa-info-circle'; endif;
		if(is_page('connect')) : $head_ico = 'fa-link'; endif;
		if(is_page('services')) : $head_ico = 'fa-gear'; endif;
		if(is_post_type_archive('work')||is_post_type_archive('case-studies')||is_page('cs-proof')||is_page('clients')) : $head_ico = 'fa-folder'; endif;
		?>
<div class="full-wrap">

		<header class="header clearfix" style="background:url(<?php echo $bee_gee;  ?>) 50% 50% no-repeat;background-size:cover;">
			<?php if(!is_page('home')) : ?><?php endif; //<div class="screne"></div><img src="< ? php ? >" /> ?>
			<div class="container">
			<a class="logo" href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php /*<div class="description">bloginfo( 'description' );</div>*/ ?>
				<a class="toggle" href="#"><i class="fa fa-bars"></i></a>
			<nav class="desktop">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			<nav class="mobile">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			</div>

<?php if(is_page('home')) : ?>
	<div class="hero">
		<div class="rotator">
			<ul>
				<li><div class="container">
					<?php //<div class="bg" style="background-image:url(<?php echo THEME; ? >/assets/img/slide-standin.jpg);"></div> ?>
					<div class="content">
						<?php echo apply_filters('the_content', $hero_cont); ?>
					
						<a href="<?php echo $hero_link; ?>" class="cta"><?php echo $hero_link_lbl; ?> ></a>
					</div>
				</div></li>
				<!-- <li style="background-image:url(<?php echo THEME; ?>/assets/img/slide-standin.jpg);">
					<div class="content">
						<h3>B2B Technology Is Our World.</h3>
						<p>McBru is a full-service, integrated agency with expertise in content creation, influencer relations, and social media made for high-end clients.</p>
					</div>
					<a href="#" class="cta">Our Blog ></a>
				</li>
				<li style="background-image:url(<?php echo THEME; ?>/assets/img/slide-standin.jpg);">
					<div class="content">
						<h3>B2B Technology Is Our World.</h3>
						<p>McBru is a full-service, integrated agency with expertise in content creation, influencer relations, and social media made for high-end clients.</p>
					</div>
					<a href="#" class="cta">Our Blog ></a>
				</li> -->
			</ul>
		</div>
		<div class="control">

		</div>
	</div>
<?php endif; ?>

		</header>

	<div class="container">

		<?php if((  is_page()  &&  !is_page('home')  && !is_page('blog-single-proof'))||is_archive()) : ?>
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
