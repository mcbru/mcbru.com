

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
		</div>
	</div>
	<?php endif; ?>

</div> <!-- /.full-wrap -->
  <?php wp_footer(); ?>

</body>
</html>
