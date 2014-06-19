<?php get_header(); 


	$o_address = get_field('address', 'Options');
	$o_email = get_field('email', 'Options');
	$o_phone = get_field('phone', 'Options');
		$call = preg_replace('/(\W*)/', '', $o_phone);
?>

<!-- 	<div class="row">
		<div class="twenty-four columns">
			<h1 class="head-it clearfix">Connect<i class="fa fa-link"></i></h3>
		</div>
	</div> -->

	<div class="connect row">
		<div class="twelve columns map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2797.274687862598!2d-122.675899!3d45.484412999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950ea375cccde5%3A0xc20ff8e951fff14e!2sMcClenahan+Bruer+Communications!5e0!3m2!1sen!2sus!4v1401940662053" width="488" height="488" frameborder="0" style="border:0"></iframe>
		</div>
		<div class="twelve columns">
			<div class="content">
			
			<?php the_content(); ?>

			<a href="#" class="cta cloaker">Inquire Today ></a>

			<p class="address">	
				<?php echo $o_address; ?>
			</p>

			<div><a class="cta trans" href="mailto:<?php echo $o_email; ?>"><i class="fa fa-envelope-o"></i> <?php echo $o_email; ?></a></div>

			<div><a class="cta trans" href="tel:<?php echo $call; ?>"><i class="fa fa-phone"></i> <?php echo $o_phone; ?></a></div>

			<ul class="social-rack tiles five_up">
				<li><a href="javascript:alert('social links')"><i class="fa fa-twitter"></i></a></li>
				<li><a href="javascript:alert('social links')"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="javascript:alert('social links')"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="javascript:alert('social links')"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="javascript:alert('social links')"><i class="fa fa-youtube-play"></i></a></li>
			</ul>
			</div>
		</div>
	</div>


<? /* 
	<div class="connect content">
		use separate counter variable to spit out content blocks in 4's of q
		<div class="rac row">
			<div class="twelve columns">
				<div class="two_up tiles">


					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>
					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>


				</div>
			</div>
			<div class="twelve columns">
				<div class="two_up tiles">


					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>
					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>


				</div>
			</div>
		</div>


		
		<div class="rac row">
			<div class="twelve columns">
				<div class="two_up tiles">


					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>
					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>


				</div>
			</div>
			<div class="twelve columns">
				<div class="two_up tiles">


					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>
					<a class="tile" href="javascript:alert('pop goes the weasel')">
						<img src="http://upload.wikimedia.org/wikipedia/commons/8/81/Wikimedia-logo.svg" alt="" />
						<div class="screen">
						<h3>Title</h3>
						<p>Blurble</p>
						<span class="cta">View Work</span>
						</div>
					</a>


				</div>
			</div>
		</div>
	</div>
 */ ?>



			<h3 class="head-it clearfix bump28"><a href="#">@MCBRU</a> on Instagram<i class="fa fa-instagram"></i></h3>

			<div class="row rac"><div id="iggy" class="instagram">
			</div></div>



	<?php /* 
	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

get_sidebar();*/ ?>

<?php get_footer(); ?>
