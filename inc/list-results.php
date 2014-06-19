
	<?php $dest = get_permalink($post->ID); ?>
	
	<article class="listed">
		<div class="row rac">
			<div class="columns twelve">
				<a href="<?php echo $dest; ?>" class="blog-hero">

					<?php if(has_post_thumbnail()) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
						<img src="<?php echo TIM . $img[0] . BL_LIST; ?>" alt="" />
					<?php else : ?>

						<img src="http://placehold.it/488x232" alt="" />
					<?php endif; ?>
					
					<div class="meta-rib">
						<strong class="month"><?php echo date('M', strtotime($post->post_date)); ?></strong>
						<strong class="date"><?php echo date('j', strtotime($post->post_date)); ?></strong>
					</div>
				</a>
			</div>
			<div class="columns twelve">
				<h2><a href="<?php echo $dest; ?>"><?php echo $post->post_title; ?></a></h2>
				<div class="meta-strip">
					<span class="name">Posted by <?php echo get_the_author_link(); ?></span>
					<span class="file">Filed Under <a href="javascript:alert('show tags action')">Public Relations</a></span>
				</div>
			</div>
		</div>
		<div class="content bump28">
			<?php the_excerpt();
			/*<p>McBru has served as influencer relations agency and strategic marketing advisor to a number of growth-stage companies over the past 20+ years.</p>

			<p>For some of our clients, the goal was an IPO and faster growth. For other clients, the goal was strategic acquisition. <br>
			One thing all our growth-stage clients had in common? </p>*/ ?>

			<a href="<?php echo $dest; ?>"class="bigr">Read More ></a>
		</div>
	</article>

	<hr class="dotter" />