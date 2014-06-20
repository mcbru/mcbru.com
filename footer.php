

		<footer class='footer'>
			<?php dynamic_sidebar( 'Footer' ); ?>
			<p>&copy; <?php echo date( "Y" ); echo " "; //bloginfo( 'name' ); ?><a href="<?php echo site_url(); ?>">mcbru.com</a></p>
		</footer>

	</div> <!-- /.container -->

	<?php if(is_page('connect')) : ?>
	<div class="cloak">
		<div class="container">
			<div class="form-pop">
				<h3 class="head-it no-base">Connect Today</h3>
				
				<?php echo do_shortcode('[contact-form-7 id="4"]'); ?>


				<a href="#" class="close">X</a>
			</div>
			<div class="form-confirmation">
				
				<img src="<?php echo THEME; ?>/assets/img/mcb-thank-you.png" alt="" />
				<p>Glad you dropped us a line!<br>Hang tight, we will be in touch shortly.</p>
				<a href="#" class="close">X</a>
			</div>
		</div>
	</div>
	<?php endif; ?>

</div> <!-- /.full-wrap -->
  <?php wp_footer(); ?>

<div class="load-cloak"><div class="icon"><i class="fa fa-gear fa-spin"></i></div></div></body>
</html>
