<?php get_header(); 

	$jobs = get_field('jobs');
?>


	<div class="row">
		<div class="twenty-four columns">

			<?php /* <div class="float-wrap">
				<div class="float content">
					<h2>Dan Cruzat</h2>
					<p>Developer, Strategist, Gentleman of Leisure</p>

					<div class="row">
						<div class="columns twelve">
							<img src="http://placehold.it/488x488" alt="">
						</div>
						<div class="columns twelve">
							<p>Lorem ipsum dolor sit amet, te tale offendit reprimique usu, mel ea munere recusabo. Te duo nibh natum novum, eu qui simul percipitur constituam. Ne latine assentior has. Ei dignissim definitiones mei, ex viderer theophrastus quo. Ea eos reprimique repudiandae. </p>
							<p>Ne vero option eripuit mea, vim et falli vituperatoribus. Mel vero mutat voluptatibus ex, usu et feugiat tibique intellegam, vidit dolores id pro. Et malis adipisci repudiare eam. At stet delicatissimi eum. In eros appareat molestiae usu, adipisci recusabo ea mea. Id wisi aliquid indoctum mea, iusto aliquid rationibus sed cu.</p>
							<p>Verear liberavisse nec ex, in nihil quando platonem vim, ea quem atqui verterem sed. Te aeque sonet mandamus his. Et possit verterem mel, constituam conclusionemque cu vel. </p>
							<p>Has ne eros interpretaris. Quo et legimus iudicabit, ex simul delenit minimum vix, ne veniam principes mea. Ex stet iudico tamquam nec. Alia nonumes molestie ad pri, sit apeirian neglegentur an.</p>
							<p>Eu vix elit animal. An usu adhuc scripta dissentiunt. His in dicta altera vulputate, eu assum summo has. Id error omnium sed, eius primis offendit sea cu, in per postea accusam. Nam id natum omnis.</p>

							<ul class="social-rack tiles three_up">
								<li><a href="javascript:alert('social links')"><i class="fa fa-twitter"></i></a></li>
								<li><a href="javascript:alert('social links')"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:alert('social links')"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				<div class="row">
					<div class="columns twenty-four">
						<h3 class="head-it clearfix">Recent Posts<i class="fa fa-chat"></i></h3>
						<div class="rac row">

							<ul class="link-list">
							<?php for($i=0;$i<4;$i++) : ?>

								<li>
									<a href="#" class="titulo">Collective Creativity</a>
									<span class="meta">March 11th, 2014</span>
								</li>
							<?php endfor; ?>
							</ul>

							</div>
						</div>

						<a href="#" class="close">X</a>
					</div>
				</div>
			</div>*/ ?>
			<div class="float-wrap"></div>

			<div class="tucker">
				<?php the_content(); ?>

				<div class="about content">
						<div class="rac row">

						<?php 
							$team = get_posts(array(
								'posts_per_page'   => -1,
								//'offset'           => 0,
								//'category'         => '',
								'orderby'          => 'menu_order',
								'order'            => 'ASC',
								//'include'          => '',
								//'exclude'          => '',
								//'meta_key'         => '',
								//'meta_value'       => '',
								'post_type'        => 'team',
								//'post_mime_type'   => '',
								//'post_parent'      => '',
								'post_status'      => 'publish' )); //,
								//'suppress_filters' => true ));

							//for($i=0;$i<12;$i++) :
							foreach($team as $coun => $tmate) :
								$d = $tmate->ID;
								$role = get_field('role',$d);
							 ?>
							<a class="tile" data-id="<?php echo $d; ?>">
								<?php if(has_post_thumbnail($d)) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($d), 'full' ); ?>
									<img src="<?php echo TIM . $img[0] . BL_PORT; ?>" alt="" />
								<?php else : ?>
									<img src="http://placehold.it/488x540" alt="" />
								<?php endif; ?>
								<div class="screen">
								<h3><?php echo $tmate->post_title; ?></h3>
								<p><?php echo $role; ?></p>
								<span class="cta">Learn More</span>
								</div>
							</a>
						<?php endforeach;

							//endfor; ?>

					</div>
				</div>

				<h2 class="head-it clearfix">Job Openings<i class="fa fa-briefcase"></i></h3>

				<?php foreach($jobs as $coun => $job) : ?>
					<h3><?php echo $job['title']; ?></h3>
					<p><?php echo $job['description']; ?></p>
				<?php endforeach; ?>
				
			</div>
		</div>
	</div>


	<?php /* 
	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

get_sidebar();*/ ?>

<?php get_footer(); ?>
