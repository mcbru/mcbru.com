

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


        <a href="#" class="close">×</a>
      </div>
      <div class="form-confirmation">
        <img src="<?php echo THEME; ?>/assets/img/mcb-thank-you.png" alt="" />
        <p>Glad you dropped us a line!<br>Hang tight, we will be in touch shortly.</p>
        <a href="#" class="close">×</a>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div> <!-- /.full-wrap -->
  <?php wp_footer(); ?>

<div class="load-cloak"><div class="icon"><i class="fa fa-gear fa-spin"></i></div></div>

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/448074.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

</body>
</html>
