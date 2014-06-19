

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
				<div class="row rac">
					<div class="columns eight">
						<input type='text' />
					</div>
					<div class="columns eight">
						<input type='text' />
					</div>
					<div class="columns eight">
						<input type='text' />
					</div>
				</div>
				<div class="row rac">
					<div class="columns eight">
						<input type='text' />
					</div>
					<div class="columns eight">
						<input type='text' />
					</div>
					<div class="columns eight">
						<input type='text' />
					</div>
				</div>
				<p class="bump28">What services are you interested in learning more about?

				<div class="row rac">
					<div class="columns eight">
						<input type='checkbox' />
						<label>Content Strategy &amp; Creation</label>
					</div>
					<div class="columns eight">
						<input type='checkbox' />
						<label>Lead Nurturing Programs</label>
					</div>
					<div class="columns eight">
						<input type='checkbox' />
						<label>Social Media &amp; Syndication</label>
					</div>
				</div>
				<div class="row rac">
					<div class="columns eight">
						<input type='checkbox' />
						<label>Brand Identity Workshops</label>
					</div>
					<div class="columns eight">
						<input type='checkbox' />
						<label>Customer Engagement</label>
					</div>
					<div class="columns eight">
						<input type='checkbox' />
						<label>Influencer Relations</label>
					</div>
				</div>
				<div class="row rac">
					<div class="columns eight">
						<input type='checkbox' />
						<label>Positioning &amp; Messaging Workshops</label>
					</div>
					<div class="columns eight">
						<input type='checkbox' />
						<label>Advertising</label>
					</div>
				</div>

				<p class="bump28">What can you tell us about your project?</p>

				<textarea></textarea>
				<div class="row rac">
					<div class="columns twenty-four">
						<input class="cta" type="submit" value="Submit Inquiry" />
					</div>
				</div>


				<a href="#" class="close">X</a>
			</div>
		</div>
	</div>
	<?php endif; ?>

</div> <!-- /.full-wrap -->
  <?php wp_footer(); ?>

</body>
</html>
