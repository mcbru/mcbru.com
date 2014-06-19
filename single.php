<?php get_header(); 



	$h_size = get_field('hero_size');
	if($h_size=='full') :
		$t_s = BL_FULL;
		$cl = 'blog-hero full';
		else :
		$t_s = BL_PORT;
		$cl = 'blog-hero half';
			endif;

?>

	<?php include 'inc/blog-search.php'; ?>

	<hr class="dotter" />
	<article>
		<div class="row rac blog-entry">
			<div class="columns twenty-four">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php //get_template_part( 'templates/partials/content', 'single' ); ?>

				<h1><?php echo $post->post_title; ?></h1>

				<div class="meta-strip">
					<span class="name">Posted by <a href="javascript:alert('show author action')">James</a></span>
					<span class="file">Filed Under <a href="javascript:alert('show tags action')">Public Relations</a></span>
				</div>

				<div class="row rac content">
					<div class="<?php echo $cl; ?>">

					<?php if(has_post_thumbnail()) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<img src="<?php echo TIM . $img[0] . $t_s; ?>" alt="" />
					<?php else : ?>

						<img src="http://placehold.it/488x232" alt="" />
					<?php endif; ?>


						<!-- <img src="http://placehold.it/488x540" alt="" /> -->
						
						<div class="meta-rib">
						<strong class="month"><?php echo date('M', strtotime($post->post_date)); ?></strong>
						<strong class="date"><?php echo date('j', strtotime($post->post_date)); ?></strong>
						</div>
					</div>
					<?php the_content(); ?>

				</div>

				<hr class="dotter" />
				<div class="clearfix">
					<div class="tag-list">
						<p><a href="javascript:alert('show listing by tag')">boxing, infographics, slideshare, social media, social media today</a></p>
					</div>
					<ul class="social-rack tiles five_up">
						<li><a href="javascript:alert('social links')"><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:alert('social links')"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="javascript:alert('social links')"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:alert('social links')"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="javascript:alert('social links')"><i class="fa fa-share-alt"></i></a></li>
					</ul>
				</div>
				<hr class="dotter" />

				<div class="pagi tiles two_up">
					<?php 
						$pre = get_permalink(get_adjacent_post(false,'',false));
						$nex = get_permalink(get_adjacent_post(false,'',true));
					
					if($pre!=get_permalink($post->ID)) : ?><a href="<?php echo $pre; ?>" class="tile prev"><span></span>Previous</a><?php endif;
					if($nex!=get_permalink($post->ID)) : ?><a href="<?php echo $nex; ?>" class="tile next"><span></span>Next</a><?php endif;

					 ?>
				</div>

			<?php comments_template(); ?>
					<?php 
							// %link
							next_post_link('<strong></strong>'); ?>

		<?php endwhile; ?>

			</div>
		</div>

	</article>

<?php get_footer(); ?>
