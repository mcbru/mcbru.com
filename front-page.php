<?php get_header(); ?>

	<div class="hero">
		<div class="rotator">
			<ul>
				<li>
					<div class="bg" style="background-image:url(<?php echo THEME; ?>/assets/img/slide-standin.jpg);"></div>
					<div class="content">
						<h3>B2B Technology Is Our World.</h3>
						<p>McBru is a full-service, integrated agency with expertise in content creation, influencer relations, and social media made for high-end clients.</p>
					</div>
					<a href="#" class="cta">Our Blog ></a>	
				</li>
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

		<div class="row">
			<div class="twelve columns">
				<h3 class="head-it clearfix">Recent Posts<i class="fa fa-comments"></i></h3>
				<ul class="link-list">
<?php $core = get_posts(array(
								'posts_per_page'   => 4,
								// 'offset'           => 0,
								// 'category'         => '',
								// 'orderby'          => 'post_date',
								// 'order'            => 'DESC',
								// 'include'          => '',
								// 'exclude'          => '',
								// 'meta_key'         => '',
								// 'meta_value'       => '',
								'post_type'        => 'post',
								// 'post_mime_type'   => '',
								// 'post_parent'      => '',
								'post_status'      => 'publish',
								'suppress_filters' => true 
						)); 

	foreach($core as $coun => $post) :	
		// print_r($post); 
								?>
					<li>
						<a href="<?php echo get_permalink($post->ID); ?>" class="titulo"><?php echo $post->post_title; ?></a>
						<span class="meta"><?php echo date('F jS, Y', strtotime($post->post_date)); ?></span>
					</li>
<?php endforeach; ?>
				</ul>
				<a href="<?php echo URL.'/blog'; ?>" class="cta">Our Blog ></a>
			</div>
			<div class="twelve columns">
				<h3 class="head-it clearfix">Follow Us<i class="fa fa-twitter"></i></h3>
				<ul class="link-list non">
					<li>
						<span class="meta"><a href='#'>@McBru</a> 1h</span>
						Does your brand have its own personal and authentic voice in the social sphere? via @engagor
						<br><a href="#">http://bit.ly/flargle</a>
					</li>
					<li>
						<span class="meta"><a href='#'>@McBru</a> 1h</span>
						Does your brand have its own personal and authentic voice in the social sphere? via @engagor
						<br><a href="#">http://bit.ly/flargle</a>
					</li>
					<li>
						<span class="meta"><a href='#'>@McBru</a> 1h</span>
						Does your brand have its own personal and authentic voice in the social sphere? via @engagor
						<br><a href="#">http://bit.ly/flargle</a>
					</li>
				</ul>
			</div>
		</div>

	<?php /*if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section id="main" role="main">

		<article class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<div class="entry">

				<?php the_content(); ?>

				<?php //wp_link_pages( array( 'before' => 'Pages: ', 'next_or_number' => 'number' ) ); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); */?>

<?php get_footer(); ?>
