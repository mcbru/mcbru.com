<?php get_header(); ?>

	<?php include 'inc/blog-search.php'; ?>

	<hr class="dotter" />
	<?php// for($i=0;$i<6;$i++) : //dummy loop ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include 'inc/list-results.php'; ?>


	<?php //endfor; ?>	
<?php endwhile; endif; ?>

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
