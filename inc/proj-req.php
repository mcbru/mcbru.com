<?php 


	//$log = get_field('logo','Options');




	define('WP_USE_THEMES', false);
	require('../../../../wp-blog-header.php');

	//$p = $_POST['i'];
	$it = get_post($_POST['i']);

	$pagos = array($it->ID);

	$rel_proj 	= get_field('related_projects',$it->ID);
	$subt 		= get_field('subtitle',$it->ID);

	$rel_count = count($rel_proj);

	$rel_left = 4 - $rel_count;

	foreach($rel_proj as $coun => $proj) :
		array_push($pagos,$proj->ID);
		endforeach;

	function get_ref() {
		global $pagos;
		$p = get_posts(array(	'posts_per_page' => 1, 'post_type' => 'work', 'orderby' => 'rand'	));
		//print_r($p);
		if( in_array($p[0]->ID,$pagos) ) :
			get_ref();
		else :
			array_push($pagos,$p[0]->ID);
		endif;
	}

	for($i=0;$i<$rel_left;$i++) :
		//$d = get_ref();
		get_ref();
		endfor;


	$me = array_shift($pagos);
//	print_r($pagos);
?>
					<div class="float content">
					<h2><?php echo $it->post_title; ?></h2>
						<p><?php echo $subt; ?></p>


							<?php if(has_post_thumbnail($it->ID)) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($it->ID), 'full' ); ?>
								<img src="<?php echo TIM . $img[0] . BL_PORT; ?>" alt="" class="work-logo" />
							<?php else : ?>

								<img src="http://placehold.it/488x540" alt="" class="work-logo" />
							<?php endif; ?>

						<?php echo apply_filters('the_content',$it->post_content); ?>

						<h3 class="head-it clearfix">Other Clients to Check Out<i class="fa fa-folder"></i></h3>
						<div class="rac row rels">

						<?php //for($i=0;$i<4;$i++) :
							foreach($pagos as $coun => $posa) : $d = $posa; $cs = get_field('rel_cs',$d); ?>
							<!-- <a class="tile">
								<img src="http://placehold.it/350x350" alt="" />
								<div class="screen">
								<h3>Title</h3>
								<p>Blurble</p>
								<span class="cta">View Work</span>
								</div>
							</a> -->
							<a class="tile">
								<?php if(has_post_thumbnail($d)) : $img = wp_get_attachment_image_src( get_post_thumbnail_id($d), 'full' ); $subt = get_field('subtitle',$d);//print_r($img[0]);$img[0] ?>
									<img src="<?php echo TIM . get_field('bw_alt',$d) . BL_PORT; ?>" alt="" />
									<img src="<?php echo TIM . $img[0] . BL_PORT; ?>" class="sub" alt="" />
								<?php else : ?>
									<img src="http://placehold.it/488x540" alt="" />
								<?php endif; ?>
								<div class="screen">
								<h3><?php echo get_the_title($d); ?></h3>
								<p><?php echo $subt; ?></p>
								<ul class="cta-rac">

									<li><span class="cta work" data-id="<?php echo $d; ?>">View Work</span></li>
									<?php if($cs) : ?>
									<li><span class="cta cs" data-id="<?php echo $cs[0]->ID; ?>">View Case Study</span></li>
									<?php endif; ?>
								</ul>
								</div>
							</a>
						<?php endforeach; ?>

						</div>

						<a href="#" id="close" class="close">X</a>
					</div>