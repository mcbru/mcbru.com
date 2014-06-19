<?php get_header(); ?>

	<div class="row"><div class="columns eight">
		<div class="search-hold">
			<input type='text' />
			<i class="fa fa-search"></i>
		</div>
	</div></div>

	<hr class="dotter" />
<?php for($i=0;$i<6;$i++) : //dummy loop ?>


	<article class="listed">
		<div class="row rac">
			<div class="columns twelve">
				<div class="list-hero">
					<img src="http://placehold.it/488x232" alt="" />
					
					<div class="meta-rib">
						<strong class="month">April</strong>
						<strong class="date">10</strong>
					</div>
				</div>
			</div>
			<div class="columns twelve">
				<h2>Lorem Ipsum Dolor Sit Amet</h2>
				<div class="meta-strip">
					<span class="name">Posted by <a href="javascript:alert('show author action')">James</a></span>
					<span class="file">Filed Under <a href="javascript:alert('show tags action')">Public Relations</a></span>
				</div>
			</div>
		</div>
		<div class="content bump28">
			<p>McBru has served as influencer relations agency and strategic marketing advisor to a number of growth-stage companies over the past 20+ years.</p>

			<p>For some of our clients, the goal was an IPO and faster growth. For other clients, the goal was strategic acquisition. <br>
			One thing all our growth-stage clients had in common? </p>

			<a href="javascript:alert('pop this link')" class="bigr">Read More ></a>
		</div>
	</article>

	<hr class="dotter" />


<?php endfor; ?>	

<?php /*	<section id="main" role="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'templates/partials/inc', 'nav' ); ?>

		<?php else : ?>

			<article>
				<h1>Not Found</h1>
			</article>

		<?php endif; ?>

	</section> <!-- /#main -->

 get_sidebar();*/ ?>

<?php get_footer(); ?>
