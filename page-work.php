<?php /*Template Name: Work*/
get_header(); ?>

		<div class="row">
			<div class="twenty-four columns">
				<h3 class="head-it clearfix">Work<i class="fa fa-folder"></i></h3>
			</div>
		</div>
	<section id="main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/partials/content', 'page' ); ?>

		<?php endwhile; ?>

	</section> <!-- /#main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
