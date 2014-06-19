<?php 


	//$log = get_field('logo','Options');




	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	//$p = $_POST['i'];
	$it = get_post($_POST['i']);
	$z = $it->ID;

	$auth = get_field('author_link',$z);

?>
<!-- 
<div class="float-wrap"> -->
				<div class="float content team">
					<h2><?php echo $it->post_title; ?></h2>
					<p><?php echo get_field('role',$z); ?></p>

					<div class="row">
						<div class="columns twelve">


							<?php if(has_post_thumbnail($z)) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($z), 'full' ); ?>
								<img src="<?php echo TIM . $img[0] . BL_PORT; ?>" alt="" />
							<?php else : ?>

								<img src="http://placehold.it/488x540" alt="" />
							<?php endif; ?>

									<!-- 
							<img src="http://placehold.it/488x488" alt=""> -->
						</div>
						<div class="columns twelve">
							<div class="scrollo">
								<?php echo apply_filters('the_content',$it->post_content); ?>
							</div>
							<ul class="social-rack tiles three_up">
								<li><a href="javascript:alert('social links')"><i class="fa fa-twitter"></i></a></li>
								<li><a href="javascript:alert('social links')"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:alert('social links')"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="columns twenty-four">

							<?php if($auth) : //print_r($auth['ID']);

							$corr = get_posts(array(
								'author'        =>  $auth['ID'],
								'orderby'       =>  'post_date',
								'order'         =>  'ASC',
								'posts_per_page' => 4,
								'post_type'        => 'post',
								'post_status'      => 'publish',
								'suppress_filters' => true
									));
								?>
							<h3 class="head-it clearfix">Recent Posts<i class="fa fa-chat"></i></h3>
							<div class="rac row">
								<ul class="link-list">
								<?php foreach($corr as $coun => $link) : ?>

									<li>
										<a href="<?php echo get_permalink($link->ID); ?>" class="titulo"><?php echo $link->post_title; ?></a>
										<span class="meta"><?php echo date('F jS, Y', strtotime($link->post_date)); ?></span>
									</li>
								<?php endforeach; ?>
								</ul>
							</div>
							<?php endif; ?>

						</div>

						<a href="#" id="close" class="close">X</a>
					</div>
					<script>

					</script>
				</div><!-- 
			</div> -->