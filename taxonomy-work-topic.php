<?php /*Template Name: Work*/
get_header(); ?>

		<div class="row">
			<div class="twenty-four columns">
				<!-- <h3 class="head-it clearfix">Work<i class="fa fa-folder"></i></h3> -->
		
				<div class="float-wrap">
				</div>


				<div class="tucker">
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
					<!-- <ul class="horz-subnav clearfix">
						<li><a href="javascript:alert('naw juss yet loov');">Brand Identity</a></li>
						<li><a href="javascript:alert('naw juss yet loov');">Content Strategy and Creation</a></li>
						<li><a href="javascript:alert('naw juss yet loov');">Social Media</a></li>
						<li><a href="javascript:alert('naw juss yet loov');">Influencer Relations</a></li>
						<li><a href="javascript:alert('naw juss yet loov');">Advertising</a></li>
					</ul> -->
					<ul class="horz-subnav">
						<li class="curr"><a href="/work">All Work</a></li>
						<?php wp_list_categories(array(
							'show_option_all'    => '',
							'orderby'            => 'name',
							'order'              => 'ASC',
							'style'              => 'list',
							'show_count'         => 0,
							'hide_empty'         => 1,
							'use_desc_for_title' => 1,
							'child_of'           => 0,
							'feed'               => '',
							'feed_type'          => '',
							'feed_image'         => '',
							'exclude'            => '',
							'exclude_tree'       => '',
							'include'            => '',
							'hierarchical'       => 1,
							'title_li'           => false,//__( 'Categories' ),
							'show_option_none'   => __( 'No categories' ),
							'number'             => null,
							'echo'               => 1,
							'depth'              => 0,
							'current_category'   => 0,
							'pad_counts'         => 0,
							'taxonomy'           => 'type',
							'walker'             => null
						)); ?>
					</ul>
					<div class="work content">
						<? /* use separate counter variable to spit out content blocks in 4's of q */ ?>
						<div class="rac row">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); $d = $post->ID; $cs = get_field('rel_cs',$d); $subt = get_field('subtitle',$d); ?>

						<?php //for($i=0;$i<12;$i++) : ?>
							<a class="tile">
                <?php if(has_post_thumbnail($d)) : 
                  $img = wp_get_attachment_image_src( get_post_thumbnail_id($d), 'full' );//$img[0]
                  $alt = get_post_meta(get_post_thumbnail_id($d), '_wp_attachment_image_alt', true);
                ?>
                  <img src="<?php echo TIM . get_field('bw_alt',$d) . BL_PORT; ?>" alt="<?php echo $alt; ?>" />
									<img src="<?php echo TIM . $img[0] . BL_PORT; ?>" class="sub" alt="<?php echo $alt; ?>" />
								<?php else : ?>
									<img src="http://placehold.it/488x540" alt="" />
								<?php endif; ?>
								<div class="screen">
								<h3><?php the_title(); ?></h3>
								<p><?php echo $subt; ?></p>
								<ul class="cta-rac">

									<li><span class="cta work" data-id="<?php echo $d; ?>" data-slug="<?php echo $post->post_name; ?>">View Work</span></li>
									<?php if($cs) : ?>
									<li><span class="cta cs" data-id="<?php echo $cs[0]->ID; ?>" data-slug="<?php echo $cs[0]->post_name; ?>">View Case Study</span></li>
									<?php endif; ?>
								</ul>
								</div>
							</a>
						<?php //if($cs) : print_r($cs[0]->ID); endif; //endfor; ?>
		<?php endwhile; endif; ?>						

						</div>
					</div>

				</div>
			</div>
		</div>


<?php get_footer(); ?>
