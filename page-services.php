<?php get_header(); 

	// $buckets = get_field('buckets');

	$args = array(
		'posts_per_page' 		=> -1,
		'post_type' 			=> 'services'
	);
	$corr = get_posts($args);

	?>

	<div class="row">
		<div class="twenty-four columns content">
			<?php the_content(); ?>
		</div>
	</div>


	<div class="content"><div class="row rac serv stacs">
	<?php 

	foreach($corr as $coun => $tac) : 
		$ico = get_field('icon',$tac->ID); $src = wp_get_attachment_image_src($ico,'full'); ?>

		<a href="#" class="tile" style="background-image:url(<?php echo $src[0]; ?>);">
		<h3><?php echo $tac->post_title; ?></h3>
		<p><?php echo $tac->post_excerpt; ?></p>
		</a>

	<?php endforeach;

	/*<center><img src="<?php echo THEME; ?>/assets/img/services.png" alt="" /></center>

	<ul class="tiles three_up mobile service-menu">
		<li>What?</li>
		<li>For Whom?</li>
		<li>How?</li>
	</ul>*/ ?>

		<?php /*
			foreach($buckets as $coun => $bkt) :
				echo '<div>';
				echo apply_filters('the_content', $bkt['content']);
				echo '</div>';
				endforeach;
			*/ ?>
<!-- 		<div>
			<h3>Brand Identity</h3>
			<p>helping you answer “What’s your promise of value?” is harder than it sounds, and where we love to start.</p>

			<h3>Positioning and Messaging</h3>
			<p>determining your main audiences, their challenges and pain points, your key differentiators, and your messaging.</p>

			<h3>Content Strategy and Creation</h3>
			<p>producing white papers, blogs, infographics, videos, newsletters, brochures, templates, signage, logos, and style guides.</p>
		</div>
		<div>
			<h3>Lead Nurturing</h3>
			<p>categorizing your sales leads, from “ready-yesterday” to “maybe-never.”</p>

			<h3>Customer Engagement</h3>
			<p>handling events, contests, surveys, and corporate marketing programs, online or in-person for you.</p>
		</div>
		<div>
			<h3>Social Media Distribution & Syndication</h3>
			<p>getting the most from communities on LinkedIn, Twitter, SlideShare, YouTube, Google+, Facebook and others.</p>

			<h3>Inﬂuencer Relations</h3>
			<p>reaching out to journalists, bloggers and industry inﬂuentials for you.</p>

			<h3>Advertising</h3>
			<p>investing your budget where it does the most for you, in online and printed media.</p>
		</div> -->
	</div></div>


<?php get_footer(); ?>
